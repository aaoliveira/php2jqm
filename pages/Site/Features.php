<?php

namespace pages\Site;

class Features extends \Mobile\Page {
 
    public function __construct() {
        parent::__construct("PHP2JQM Features");
        
        $server = new \Controls\ListViewBox("On Server");
        $server->add(new \Controls\ListView\Item("PHP 5.3 or higher"));
        $server->add(new \Controls\ListView\Item("100% object oriented programming approach"));
        $server->add(new \Controls\ListView\Item("Create pages in PHP only, no html/css/javascript needed"));
        
        $this->add($server);
        
        $client = new \Controls\ListViewBox("On Client");
        $client->add(new \Controls\ListView\Item("jQuery and jQueryMobile"));
        $client->add(new \Controls\ListView\Item("no html/javascript needed"));
        $client->add(new \Controls\ListView\Item('Compatible with all major mobile platforms","iOS, Android, Blackberry, Palm WebOS, Nokia/Symbian, Windows Mobile, bada, MeeGo with baseline support for all devices that understand HTML'));
        
        $this->add($client);
    }
        
    
}