<?php

namespace \Controls\Form;

class Number extends \Component {

    public function __construct($label, $name, $value="") {
        parent::__construct($label, $name);

        $text = "<input type=\"number\" id=\"$name\" name=\"$name\" value=\"$value\"/>";

        $this->add(new \Html\Text($text));
    }

}