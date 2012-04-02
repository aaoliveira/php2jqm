<?php

namespace pages\Site\Controls\Page;

class Dialogs extends \Mobile\Page {

    public function __construct() {
        parent::__construct("Dialog");
        
        $lstBox = new \Controls\ListViewBox("List View");
        
        $lstBox->add(new \Controls\ListView\ItemDialog($this->go("Site\Controls\Foo"),"Inside a listView"));
                
        $this->add($lstBox);
        
        $this->add(new \Controls\Button($this->go("Site\Controls\Foo"), "In a Button",true,"",true));
        
        $this->add(new \Mobile\Link($this->go("Site\Controls\Foo"), "In a Link","",true));

        $this->add(new \Controls\Button($this->go("Site\Controls\Foo"), "With Transition SLIDE_DOWN",true,  \Mobile\Transition::SLIDE_DOWN,true));
        
        $this->add(new \Controls\Button($this->go("Site\Controls\Foo"), "With Transition FLIP",true,  \Mobile\Transition::FLIP,true));
        
        $this->addFooterButton("Source", "https://github.com/danielps/php2jqm/blob/master/pages/Site/Controls/Page/Dialogs.php");
        
        
    }

}