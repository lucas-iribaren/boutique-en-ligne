<?php

class myAutoload
{
    public static function start () 
    {

        spl_autoload_register([__CLASS__, 'autoload']);

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST', 'http://' . $host . '/boutique-en-ligne/');
        define('ROOT', $root . 'boutique-en-ligne/');

        define('CONTROLLER', ROOT . 'src/controller/');
        define('VIEW', ROOT . 'src/views/');
        define('MODEL', ROOT . 'src/models/');

        define('ASSETS', HOST . 'assets/');
    }

    public static function autoload($class)
    {
        $classPath = str_replace('\\', '/', $class);

        if(file_exists(MODEL . $classPath . 'php'))
        {
            include_once MODEL . $classPath . 'php';
        } 
        
        elseif (file_exists(CONTROLLER . $classPath . 'php'))
        {
            include_once CONTROLLER . $classPath . 'php';
        } 

        elseif (file_exists(VIEW . $classPath . '.php'))
        {
            include_once VIEW . $classPath . '.php';
        }
        
        else {
            throw new Exception("Class $class not found.");
        }
    }
}

?>