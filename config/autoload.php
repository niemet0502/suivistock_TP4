<?php
class Autoloader{
    static function register(){
        spl_autoload_register(array(__CLASS__,"autoload"));
    }
    static function autoload($class){
        // echo $class;
        if (file_exists("src/model/".$class.".php")) {
            # code...
            require_once "src/model/".$class.".php";
        }elseif (file_exists("src/controller/".$class.".php")) {
            # code...
            require_once "src/controller/".$class.".php";
        }
        // NAMESPACE
        elseif (file_exists(str_replace("\\","/",$class.".php"))) {
            # code...
            require_once str_replace("\\","/",$class.".php");
        }
    }
}
Autoloader::register();
?>