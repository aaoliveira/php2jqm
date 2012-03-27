<?php

namespace Mobile;

class Footer extends \Component {

    public function __construct($buttons=null,$footerFixed = false) {

	if ($buttons != null) {

	    $fixedText = "";
	    if ($footerFixed)
		$fixedText = " data-position=\"fixed\" ";


	    parent::__construct("<div data-role=\"footer\" $fixedText class=\"ui-bar\"><div data-role=\"controlgroup\" data-type=\"horizontal\">", "</div></div>");
	    foreach ($buttons as $button) {
		$this->add($button);
	    }
	}
	else
	    parent::__construct("<div data-role=\"footer\">", "</div>");
    }

}