<?php

namespace Controls;

class CollapsiblePanel extends \Component {

    public function __construct($title="", $collasped=true) {
        parent::__construct("<div data-role=\"collapsible\" data-collapsed=\"$collasped\">", "</div>");

        if ($title != "")
            $this->add(new \Html\H(3, $title));
    }

}