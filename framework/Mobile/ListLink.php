<?php

namespace Mobile;

class ListLink extends \Component {

   public function __construct($url, $text, $transition="", $dialog=false, $icon="", $position="") {

	parent::__construct("<li>", "</li>");
        $this->add(new \Mobile\Link($url, $text, $transition, $dialog, $icon, $position));
	
    }

}