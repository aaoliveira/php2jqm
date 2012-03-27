<?php

namespace Mobile;

class Exception extends \Html\Text {

    public function __construct($e) {

	$text = "<h3>PHP Exception</h3><div style='background-color:#ffcccc'>";
	$text .= "<strong>{$e->getMessage()}</strong><br/>";
	$text .= "<pre>{$e->getTraceAsString()}</pre><br/>";
	$text .= "</div>";

	parent::__construct($text);
    }

}