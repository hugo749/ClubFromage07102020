<?php

class Autoloader{
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));

    }
    static function autoload($business){

        //require 'Model/business/'.$business.'.php';
        $file = str_replace('\\', '/', $business);
        $file = '/'. $file . '.php';
        echo $file;
//        if(file_exists($file))
            return require $file;

    }

}
