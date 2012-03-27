<?php

namespace Controls;

class Form extends \Component {

    public function __construct($action, $method="POST") {
        parent::__construct("<form action=\"$action\" method=\"$method\">", "</form>");
    }

    public function AddSubmit($value="Submit") {
        $this->add(new \Html\Text("<button type=\"submit\">$value</button>"));
    }

}