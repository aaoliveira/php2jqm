<?php

namespace Controls\ListView;

class Item extends \Component {

    public function __construct($titleOrText, $text="") {
        parent::__construct("<li> ", "</li>");

        if ($text == "") {
            $this->add(new \Html\Text($titleOrText));
        } else {
            $this->add(new \Html\Text("<h3>$titleOrText</h3><p>$text</p>"));
        }
    }

}