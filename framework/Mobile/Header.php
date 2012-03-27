<?php
namespace Mobile;

class Header extends \Component{
    
    protected $title;
    protected $buttons;
    protected $navButtons;
    
     public function __construct($title, $buttons=null, $navButtons=null,$fixed=false) {
        
	$fixedText = "";
	if ($fixed)
	    $fixedText = " data-position=\"fixed\" ";

	parent::__construct("<div data-role=\"header\" $fixedText data-theme=\"" . \App::getInstance()->getConf("theme_header") . "\">", "</div>");

	$this->title = $title;
	$this->buttons = $buttons;
	$this->navButtons = $navButtons;
    }
    
    public function render() {
        $this->add(new \Html\H("1", $this->title));

	if ($this->buttons != null) {
            foreach ($this->buttons as $button) {
                $this->add($button);
            }
        }

	if ($this->navButtons!=null)
	    $this->add(new \Mobile\NavBar($this->navButtons));

        return parent::render();
    }
    
}