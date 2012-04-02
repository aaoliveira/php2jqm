<?php
namespace Html;
class Page extends \Component
{
	public function __construct()
	{
             parent::__construct("<!DOCTYPE html><html>","</html>");
             
             /* Search for a Mobile Page */
             $p = isset($_GET['p'])?$_GET['p']:\App::getInstance()->getConf("main_page");
             $p = str_replace('\\\\', '\\', $p);
             $p = "\\pages\\$p";
             $pInstance = new $p;
             
             $this->add(new Head());
             $this->add(new Body($pInstance));
	}
}
