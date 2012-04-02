<?php

namespace pages\Site\Controls\Page;

class Transitions extends \Mobile\Page {

    public function __construct() {
        parent::__construct("Transitions");
        
        $lstBox = new \Controls\ListViewBox("Transitions");
        
        $lstBox->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Foo"),"Fade", \Mobile\Transition::FADE));
        $lstBox->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Foo"),"Flip", \Mobile\Transition::FLIP));
        $lstBox->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Foo"),"POP", \Mobile\Transition::POP));
        $lstBox->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Foo"),"Slide", \Mobile\Transition::SLIDE));
        $lstBox->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Foo"),"Slide Down", \Mobile\Transition::SLIDE_DOWN));
        $lstBox->add(new \Controls\ListView\ItemLink($this->go("Site\Controls\Foo"),"Slide Up", \Mobile\Transition::SLIDE_UP));
                
        $this->add($lstBox);
        
    }

}