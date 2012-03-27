<?php

namespace \Controls\Form;

class Flip extends \Component {

    public function __construct($label,$name,$values) {
        parent::__construct($label,$name);

	$text = "<select name=\"$name\" id=\"$name\" data-role=\"slider\"> ";

	foreach ($values as $key => $value) {
	    $text .= "<option value=\"$key\">$value</option>";
	}
	$text .= "</select>";

	$this->add(new \Html\Text($text));
	
    }

}