<?php

namespace pages\Site;

class Controls extends \Mobile\Page {
 
    public function __construct() {
        parent::__construct("PHP2JQM Controls");
        
               
        $menu = new \Controls\ListViewBox("Page");
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Page\PageLinking"),"Page Linking"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Page\Transitions"),"Transitions"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Page\Dialogs"),"Dialogs"));
        $this->add($menu);
        
        $menu = new \Controls\ListViewBox("ToolBar");
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\ToolBar\Header"),"Header"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\ToolBar\Footer"),"Footer"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\ToolBar\Footer"),"NavBar Buttons"));
        $this->add($menu);
        
        $menu = new \Controls\ListViewBox("Buttons");
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Buttons\FullWidth"),"Full Width"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Buttons\Simple"),"Simple"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Buttons\Table"),"Tabbled"));
        $this->add($menu);
        
        $menu = new \Controls\ListViewBox("Content");        
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Content\Html"),"HTML Content"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Content\Collapsible"),"Collapsible Content"));
        $this->add($menu);
        
        $menu = new \Controls\ListViewBox("Form");        
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\Simple"),"Simple Form"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\Post"),"Form Post"));
        $menu->add(new \Controls\ListView\ItemDivider(("Controls")));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\TextInput"),"Text Input"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\Flip"),"Flip"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\Number"),"Number"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\Password"),"Password"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\RadioGroup"),"Radio Group"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\Search"),"Search"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\Select"),"Select"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\Slider"),"Slider"));
        $menu->add(new \Controls\ListView\ItemLink($this->go("\Controls\Form\TextArea"),"TextArea"));
        
        $this->add($menu);
        
        
    }
        
    
}