<?php

namespace pages\Site;

class Download extends \Mobile\Page {
 
    public function __construct() {
        parent::__construct("PHP2JQM Download");
        
        
        $this->add("php2jqm is beta. Source at: https://github.com/danielps/php2jqm");
        
    }       
    
}