<?php

namespace Controls\ListView;

class ItemDialog extends \Component {

    public function __construct($url,$text,$transition="") {
        parent::__construct("<li> ","</li>");
        $this->add(new \Mobile\Link($url, $text,$transition,true));
    }  

}