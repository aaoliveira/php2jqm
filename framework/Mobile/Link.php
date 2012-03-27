<?php

namespace Mobile;

class Link extends \Component {

   public function __construct($url, $text, $transition="", $dialog=false, $icon="", $position="",$displayAsButton="",$fullWidth="") {

        $displayAsButton = ($displayAsButton != "") ? " data-role=\"button\" " : "";

	$transition = ($transition != "") ? " data-transition=\"{$transition}\" " : "";
        $dialog = ($dialog != false) ? " data-rel=\"dialog\" " : "";
        $icon = ($icon != "") ? " data-icon=\"{$icon}\" " : "";
	$fullWidth = ($fullWidth != true) ? " data-inline=\"true\" " : "";
	
	/*
	 * If display as button, change the position
	 */
	if ($displayAsButton!="")
	{
	    $position = ($position != "") ? " data-iconpos=\"$position\" " : "";
	}
	else
	{
	    $position = ($position == \Html\Position::RIGHT) ? " class=\"ui-btn-right\" " : "class=\"ui-btn-left\"";
	}

        if ($dialog != "")
            if ($transition == "")
                $transition = "data-transition=\"" . \Mobile\Transition::POP . "\"";

        parent::__construct("<a href=\"$url\" $transition $dialog $icon $position $displayAsButton $fullWidth>", "</a>");
        $this->add($text);
    }

}