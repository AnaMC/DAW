<? php

    class Request {
    
    /*Este método va a tratar de leert un parámetro, si es que ha llegado*/
    
    function get ($nombreParametro){
        
        if (isset ($GET[$nombreParametro])){
            return $_GET[$nombreParametro];
        }
        return null;
    }
    
    function post ($nombre){
        
        if (isset ($POST[$nombreParametro])){
            return $_POST [$nombreParametro];
        }
        return null;
    }
    
    function read ($nombreParametro){
        
       /* if (isset($_GET[$nombre])){
                return $_GET[$nombre];
        } else if(isset ($POST[$nombre])){
                return $_POST [$nombre];
        }
        return null;
        }
        */
        
        $valor = get(nombreParametro);
        
        if($valor == null){
            /*ARREGLAR*/
        }
    }

?>