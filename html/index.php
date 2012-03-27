<?php
/**
 * Index file
 * Don't edit this file!
 * Go to pages folder to create your mobile app
 * */
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include("../framework/autoload.php");
$conf=include("../config.php");
set_include_path( dirname(__FILE__) . "/../");
App::getInstance()->setConf($conf);
$page = new \Html\Page();
echo $page->render();