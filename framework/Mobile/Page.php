<?php

namespace Mobile;

class Page extends \Component {

    private $title;
    private $id;
    private $content;
    private $footer;
    private $headerButtons;
    private $headerNavButtons;
    private $footerButtons;
    public $headerFixed = false;
    public $footerFixed = false;
    

    public function __construct($title="",$backButtonEnabled=true, $id="") {
        
        $backButtonText="";
        if ($backButtonEnabled)
            $backButtonText = "data-add-back-btn='true'";
        
        parent::__construct("<div data-role=\"page\" $backButtonText data-theme=\"" . \App::getInstance()->getConf("theme_page") . "\" id=\"{$id}\">", "</div>");
        $this->backButtonEnabled = $backButtonEnabled;
        $this->title = $title;
        $this->content = array();
        $this->headerButtons = array();
        $this->footerButtons = array();
    }

    public function add($content) {
        $this->content[] = $content;
    }

    public function addHeaderButton($position, $title, $url, $icon="", $isDialog=false, $transition="") {
        $this->headerButtons[] = new \Mobile\Link($url, $title, $transition, $isDialog, $icon, $position);
    }

    public function addHeaderNavButton($title, $url, $icon="", $isDialog=false, $transition="") {
        $this->headerNavButtons[] = new \Mobile\ListLink($url, $title, $transition, $isDialog, $icon);
    }

    public function addFooterButton($title, $url, $position = \Html\Position::LEFT, $icon="", $isDialog=false, $transition="") {
        $this->footerButtons[] = new \Mobile\Link($url, $title, $transition, $isDialog, $icon, $position);
    }

    public function render() {

        parent::add(new \Mobile\Header($this->title, $this->headerButtons, $this->headerNavButtons, $this->headerFixed));
        parent::add(new \Mobile\Content($this->content));
        parent::add(new \Mobile\Footer($this->footerButtons, $this->footerFixed));

        return parent::render();
    }
    
    public function go($class)
    {
        
        return "index.php?p=$class";
    }

}