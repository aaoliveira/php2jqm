<?php

namespace Controls;

class Button extends \Mobile\Link {

    public function __construct($url, $text, $fullWidth=true, $transition="", $dialog=false, $icon="", $position="") {
        parent::__construct($url, $text, $transition, $dialog, $icon, $position, true, $fullWidth);
    }

}