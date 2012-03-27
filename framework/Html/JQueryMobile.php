<?php

namespace Html;

class JQueryMobile extends \Component{
    
    public function __construct() {
        parent::__construct();
        
        $this->add(new Meta("viewport", "width=device-width, initial-scale=1"));
        $this->add(new HeadLink("stylesheet",\App::getInstance()->getConf("jquery_mobile_css")));
        $this->add(new Script(\App::getInstance()->getConf("jquery")));
        $this->add(new Script(\App::getInstance()->getConf("jquery_mobile")));
    }
}

?>
