<?php

namespace pages;

class Main extends \Mobile\Page {
 
    public function __construct() {
        
        parent::__construct("PHP2JQM");
        
        $text = "
        <p>
	php2jqm is a framework to build mobile applications on the web.  You can create complete applications with various
        components using a simple object orientation approach.
	</p>
        <p>
        All this site was build with php2jqm and the source can be viewed in the <a href=\"http://code.google.com/p/zenmo/\">google code</a>. 
        </p>
        ";

	$this->add(new \Html\Text($text));
        
        $menu = new \Controls\ListViewBox("Menu");
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Features"),"Features"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Download"),"Download"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Install"),"Install"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\QuickStartGuide"),"Quick Start Guide"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Controls"),"Controls"));
        
        $this->add($menu);
        
    }
        
    
}