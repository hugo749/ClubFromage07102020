<?php

class Autoloader{
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));

    }
    static function autoload($business){


        //require 'Model/business/'.$business.'.php';
        $file = str_replace('ClubFromage', '/', $business);
        $file = 'C:/Bitnami/wampstack-7.4.6-1/apps/ClubFromage/htdocs/'. $file . '.php';



        if(file_exists($file))
            return require $file;

    }

}
