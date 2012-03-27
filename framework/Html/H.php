<?php

namespace Html;

class H extends \Component {

    public function __construct($level,$text) {
        parent::__construct("<h{$level}>", "</h{$level}>");
        $this->add($text);
    }

}