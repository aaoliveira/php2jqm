<?php

namespace \Controls\Form;

class CheckGroup extends \Component {

    public function __construct($label, $name, $values, $horizontal=false) {

        $horizontal = ($horizontal) ? "data-type=\"horizontal\"" : "";

        parent::__construct("<div data-role=\"fieldcontain\"><fieldset data-role=\"controlgroup\" $horizontal> ", "</fieldset></div>");

        $text = "<legend>$label</legend>";

        foreach ($values as $key => $value) {
            $text .= "<input type=\"checkbox\" name=\"$key\" id=\"$key\" class=\"custom\" />
				<label for=\"$key\">$value</label> ";
        }

        $this->add(new \Html\Text($text));
    }

}