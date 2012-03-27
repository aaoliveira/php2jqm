<?php
namespace Html;
class Head extends \Component {
    
    public function __construct() {
        parent::__construct("<head>","</head>");
        $this->add(new Title());
        $this->add(new JQueryMobile());
    }
    
}
