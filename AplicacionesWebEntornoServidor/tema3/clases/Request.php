<? php
    //usar como nombre de clase self nos evita refactorizar ya que lo cambia el mismo. 
    class Request {
    
    /*Este método va a tratar de leert un parámetro, si es que ha llegado*/
    
    function get ($nombreParametro){
        
        if (isset ($GET[$nombreParametro])){
            return $_GET[$nombreParametro];
        }
        return null;
    }
    
    static function getpost($nombre){
        $valor = self::get($nombre);
        if($valor == null){
            $valor = self::post(nombreDelParametro);
        }
    }
    
    static function post ($nombre){
        
        if (isset ($POST[$nombreParametro])){
            return $_POST [$nombreParametro];
        }
        return null;
    }
    
    static function postget(){    
        $valor= self::post($nombreDelParametro);
            if ($valor == null){
                $valor = self::get($nombreDelParametro);
            }
       return $valor;
     }   
     function read ($nombreParametro){
       /* if (isset($_GET[$nombre])){
                return $_GET[$nombre];
        } else if(isset ($POST[$nombre])){
                return $_POST [$nombre];
        }
        return null;
        }
                
        $valor = get(nombreParametro);
        
        if($valor == null){
            $valor = post($nombreDelParametro);
            
        }
        */
        
        return $valor;
    }
    
/*ACTUALMENTE Se recomienda no cerrar los archivos que sólo llevan PHP*/