<?php

namespace pages\Site\Controls\Page;

class PageLinking extends \Mobile\Page {

    public function __construct() {
        parent::__construct("Page Linking");
        
        $item = new \Controls\ListViewBox();
        $item->add(new \Controls\ListView\ItemDivider(("Ajax-loadaed with transitions")));
        $item->add(new \Controls\ListView\Item("You can use a simple link:<br/> \$this->add(new \Mobile\Link(\"namespace\class\", \"text\")) "));

        $this->add($item);
        
        $item = new \Controls\ListViewBox();
        $item->add(new \Controls\ListView\ItemDivider(("Item links")));
        $item->add(new \Controls\ListView\Item("You can use a link in the list view:<br/> \$item->add(new \Controls\ListView\ItemLink(\"namespace\class\", \"text\"))) "));
        
        
        $this->add($item);
        
    }

}