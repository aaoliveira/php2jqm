PHP 2 JQM
========

Create jQuery Mobile apps with a PHP OO aproach.

Example:


	<?php

 	namespace pages;

 	class Main extends \Mobile\Page {
 
    public function __construct() {
        
        parent::__construct("PHP2JQM");
        
        $text = "Hello World";

	$this->add(new \Html\Text($text));
        
        //add a ListBox
        $menu = new \Controls\ListViewBox("Menu");
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Features"),"Features"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Download"),"Download"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Install"),"Install"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\QuickStartGuide"),"Quick Start Guide"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Controls"),"Controls"));
        
        $this->add($menu);
        
    }
        
    
	}

