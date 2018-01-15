<?php
class AutoLoad {
    static function searchClass($className) {
        $archivo = dirname(__FILE__) . '/' . $className . '.php'; /*calculamos la ruta en la que estamos*/
        if(file_exists($archivo)) {
            require $archivo;
        }
    }
}
spl_autoload_register('AutoLoad::searchClass');  /*Una de las pocas veces que pondremos codigo despues de la clase, es la instruccion de registro que llama al metodo para buscar la clase*/
