<?php

namespace Controls;

class GroupButtons extends \Component {

    public function __construct($buttons, $horizontal=true) {

        $horizontal = ($horizontal == true) ? "data-type=\"horizontal\"" : "";

        parent::__construct("<div data-role=\"controlgroup\"  $horizontal>", "</div>");

        foreach ($buttons as $button) {
            $this->add($button);
        }
    }

}