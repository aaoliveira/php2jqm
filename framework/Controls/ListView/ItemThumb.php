<?php

namespace Controls\ListView;

class ItemThumb extends \Component {

    public function __construct($text,$url, $image, $transition="") {
        parent::__construct("<li> ", "</li>");
        $this->add(new \Html\Image($image,"","ui-li-icon"));
        $this->add(new \Mobile\Link($url, $text, $transition));
    }

}