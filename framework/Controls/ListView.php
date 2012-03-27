<?php

namespace Controls;

class ListView extends \Component {

    public function __construct($text="", $isSubList=false, $useFilter=false) {

        $useFilterString = "";
        if ($useFilter)
            $useFilterString = "data-filter=\"true\"";

        // TODO: Melhorar forma de descobrir se é uma sub lista ..

        if (!$isSubList) {
            parent::__construct("<ul data-role=\"listview\" data-theme=\"" . \App::getInstance()->getConf("theme_list") . "\"  data-dividertheme=\"" . \App::getInstance()->getConf("theme_list_divider") . "\" $useFilterString> ", "</ul>");

            if ($text != "")
                $this->add(new \Controls\ListView\ItemDivider($text));
        }
        else {
            parent::__construct("<li>$text<ul data-role=\"listview\" $useFilterString>", "</ul></li>");
        }
    }

}