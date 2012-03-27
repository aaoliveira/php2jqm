<?php

namespace Controls\ListView;

class ItemHeading extends \Component {

    public function __construct($text) {
        parent::__construct("<li data-role=\"list-divider\" role=\"heading\"> ","</li>");
        $this->add(new \Html\Text($text));
    }

}