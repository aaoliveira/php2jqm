<?php

namespace \Controls\Form;

class TextInput extends \Component {

    public function __construct($label, $name, $value="") {
        parent::__construct($label, $name);

        $text = "<input type=\"text\" id=\"$name\" name=\"$name\" value=\"$value\"/>";

        $this->add(new \Html\Text($text));
    }

}