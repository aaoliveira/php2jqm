<?php

namespace Mobile;

class Content extends \Component {

    public function __construct($components) {
        parent::__construct("<div data-role=\"content\" data-theme=\"" . \App::getInstance()->getConf("theme_content") . "\">", "</div>");

        foreach ($components as $component) {
            $this->add($component);
        }
    }

}