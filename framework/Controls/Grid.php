<?php

namespace Controls;

class Grid extends \Component {

    public function __construct($numColumns) {

        $col = "a";
        switch ($numColumns) {
            case 2:
                $col = "a";
                break;
            case 3:
                $col = "b";
                break;
            case 4:
                $col = "c";
                break;
            case 5:
                $col = "d";
                break;
            case 6:
                $col = "e";
                break;

            default:
                break;
        }

        parent::__construct("<div class=\"ui-grid-$col\">", "</div>");
    }

}