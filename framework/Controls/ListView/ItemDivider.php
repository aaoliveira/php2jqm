<?php

namespace Controls\ListView;

class ItemDivider extends \Component {

    public function __construct($text) {
        parent::__construct("<li data-role=\"list-divider\"> ","</li>");
        $this->add(new \Html\Text($text));
    }  

}