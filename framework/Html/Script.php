<?php

namespace Html;

class Script extends \Component{
    
    protected $src;
    
    public function __construct($src) {
        parent::__construct();
        $this->src = $src;
    }
    
    public function render()
    {
        return "<script src=\"{$this->src}\"></script>";
    }
    
}

?>
