<?php
class AutoLoad {
    static function searchClass($className) {
        $archivo = 'clases/' . $className . '.php';
        if(file_exists($archivo)) {
            require $archivo;
        }
    }
}
spl_autoload_register('AutoLoad::searchClass');  /*una de las pocas veces que pondremos codigo despues de la clase, es la instruccion de registro que llama al metodo para buscar la clase*/
