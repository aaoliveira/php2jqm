<?php

namespace Html;

class Title extends \Component {

    public function __construct() {
        parent::__construct("<title>", "</title>");
        $this->add(\App::getInstance()->getConf("default_page_title"));
    }

}