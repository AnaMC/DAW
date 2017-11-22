<?php

class AutoLoad { /*Autocarga de clases*/

    static function searchClass($className) {
        $archivo = dirname(__FILE__) . '/' . $className . '.php';
        if(file_exists($archivo)) {
            require $archivo;
        }
    }

}

spl_autoload_register('AutoLoad::searchClass'); /*Parte de la autocarga*/