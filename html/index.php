<?php
error_reporting(E_ALL);
/**
 * Index file
 * Don't edit this file!
 * Go to pages folder to create your mobile app
 * */
include("../framework/autoload.php");
$conf=include("../config.php");
set_include_path( dirname(__FILE__) . "/../");
App::getInstance()->setConf($conf);
$page = new \Html\Page();
echo $page->render();