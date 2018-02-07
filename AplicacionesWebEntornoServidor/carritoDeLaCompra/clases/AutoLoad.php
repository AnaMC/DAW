<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class AutoLoad {

    static function searchClass($className) {
        $archivo = dirname(__FILE__) . '/' . $className . '.php';
        if(file_exists($archivo)) {
            require $archivo;
        }
    }

}

spl_autoload_register('AutoLoad::searchClass');