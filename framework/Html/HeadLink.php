<?php

namespace Html;

class HeadLink extends \Component{
    
    protected $rel;
    protected $href;
    
    public function __construct($rel,$href) {
        parent::__construct();
        $this->rel = $rel;
        $this->href = $href;
    }
    
      public function render() {
        return "<link rel=\"{$this->rel}\" href=\"{$this->href}\">";
    }
    
}

?>
