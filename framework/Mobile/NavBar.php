<?php

namespace Mobile;

class NavBar extends \Component {

    public function __construct($components) {
        parent::__construct("<div data-role=\"navbar\"><ul>", "</ul></div>");
        $this->add($components);
    }

}