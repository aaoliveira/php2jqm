<?php
namespace Html;
class Text extends \Component{
    
    var $text;
    
    public function __construct($text) {
        parent::__construct();
        $this->text = $text;
    }

    public function render()
    {
        return $this->text;
    }
}