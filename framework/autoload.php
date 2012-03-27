<?php
function __autoload($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require_once($file);
}