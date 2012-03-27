<?php

namespace Controls;

class InlineButtons extends \Component {

    public function __construct($buttons) {
        parent::__construct("<div data-inline=\"true\">","</div>");
	
	foreach ($buttons as $button) {
	    $this->add($button);
	}

    }

}