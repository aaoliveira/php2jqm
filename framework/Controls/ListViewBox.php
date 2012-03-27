<?php

namespace Controls;

class ListViewBox extends \Component {

    public function __construct($text="",$isSubList=false) {

        if (!$isSubList)
        {
            parent::__construct("<ul data-role=\"listview\" data-inset=\"true\" data-theme=\"".\App::getInstance()->getConf("theme_list")."\"  data-dividertheme=\"".  \App::getInstance()->getConf("theme_list_divider")."\"> ", "</ul>");

            if ($text!="")
                $this->add(new \Controls\ListView\ItemDivider($text));
        }
        else
        {
            parent::__construct("<li>$text<ul>","</ul></li>");
        }

    }

}