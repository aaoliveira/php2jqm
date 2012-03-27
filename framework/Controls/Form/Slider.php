<?php

namespace \Controls\Form;

class Slider extends \Component {

    public function __construct($label,$name,$min,$max,$value="") {
        parent::__construct($label,$name);

	$text = "<input type=\"range\" id=\"$name\" name=\"$name\" min=\"$min\" max=\"$max\" value=\"$value\"/>";

	$this->add(new \Html\Text($text));
	
    }

}