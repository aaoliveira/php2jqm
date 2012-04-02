<?php
namespace pages\Site\Controls;

class Foo extends \Mobile\Page {
    
    public function __construct() {
        parent::__construct("Foo Page");
        $this->add("A foo Page");
    }
}