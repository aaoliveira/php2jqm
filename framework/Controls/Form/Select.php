<?php

namespace \Controls\Form;

class Select extends \Component {

    public function __construct($label, $name, $values) {

        parent::__construct($label, $name, "select");

        $text = "<select name=\"$name\" id=\"$name\">";

        foreach ($values as $key => $value) {
            $text .= "<option value=\"$key\">$value</option> ";
        }
        $text .= "</select>";

        $this->add(new \Html\Text($text));
    }

}