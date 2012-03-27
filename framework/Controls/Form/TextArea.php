<?php

namespace \Controls\Form;

class TextArea extends \Component {

    public function __construct($label, $name, $cols=40, $rows=8, $value="") {
        parent::__construct($label, $name);

        $text = "<textarea cols=\"$cols\" rows=\"$rows\" id=\"$name\" name=\"$name\"> $value </textarea>";

        $this->add(new \Html\Text($text));
    }

}