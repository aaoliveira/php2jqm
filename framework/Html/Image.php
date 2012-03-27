<?php

namespace Html;

class Image extends \Component {

    protected $src;
    protected $class;
    protected $alt;

    public function __construct($src,$alt="",$class="") {
        parent::__construct();
        $this->src = $src;
        $this->alt = $alt;
        $this->class = $class;

    }

    public function render() {
        return "<img src=\"{$this->src}\" class=\"{$this->class}\" />";
    }

}