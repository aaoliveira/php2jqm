<?php
namespace Html;
class Body extends \Component{
    
    public function __construct($page) {
        parent::__construct("<body>", "</body>");
        $this->add($page);
    }
}