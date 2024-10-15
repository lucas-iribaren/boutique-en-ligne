<?php

class myAutoload
{
    public static function start () 
    {

        // spl_autoload_register()

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST', 'http://'.$host.'/BOUTIQUE-EN-LIGNE/');
        define('ROOT', $root.'BOUTIQUE-EN-LIGNE/');

        define('CONTROLLER', ROOT.'controller/');
        define('VIEW', ROOT.'src/views/');
        define('MODEL', ROOT.'src/models/');

        define('ASSETS', HOST.'assets/');
    }

    public static function autoload($class)
    {
        if(file_exists(MODEL.$class.'php'))
        {
            include_once (MODEL.$class.'php');
        } elseif (file_exists(CONTROLLER.$class.'php'))
        {
            include_once (CONTROLLER.$class.'php');
        } 
    }
}

?>