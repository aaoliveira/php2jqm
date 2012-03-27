<?php

namespace Html;

class Meta extends \Component{
    
    protected $name;
    protected $content;
    
    public function __construct($name,$content) {
        parent::__construct();
        $this->name = $name;
        $this->content = $content;
    }
    
      public function render() {
        return "<meta name=\"{$this->name}\" content=\"{$this->content}\">";
    }
    
}

?>
