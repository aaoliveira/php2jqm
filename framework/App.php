<?php
class App {
    private static $instance;
    private $conf;
    private function __construct() 
    {
    }

    /**
     *
     * @return App 
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
    
    public function setConf($conf)
    {
        $this->conf = $conf;
    }
    
    public function getConf($key)
    {
        return $this->conf[$key];
    }

    // Previne que o usuário clone a instância
    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
    
}