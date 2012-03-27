<?php

namespace \Controls\Grid;

class Col extends \Component {

    public function __construct($number=1) {

        $col = "a";
        switch ($number) {
            case 1:
                $col = "a";
                break;
            case 2:
                $col = "b";
                break;
            case 3:
                $col = "c";
                break;
            case 4:
                $col = "d";
                break;
            case 5:
                $col = "e";
                break;

            default:
                break;
        }

        parent::__construct("<div class=\"ui-block-$col\">", "</div>");
    }

}