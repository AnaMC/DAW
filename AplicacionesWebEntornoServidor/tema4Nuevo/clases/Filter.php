<?php

class Filter {

    static function isCondicionQueMeHeInventado($value) {
            return preg_match('/^[A-Za-z][A-Za-z0-9]{5,9}$/‘'. $value);
        
    }

    static function isDate($value) {
        
        

    }

    static function isEmail($value) {
        
        return filter_var($value, FILTER_VALIDATE_EMAIL);

    }

    static function isFloat($value) {
        
        return is_float($value);

    }

    static function isInteger($value) {
        return is_int($value);
    }
    
    static function isIP($value) {
         

        if (filter_var($value, FILTER_VALIDATE_IP)) {  //Filtro para validar IP
             return true;
        }
             return false;
    }

    static function isLogin($value) {

          /*Empieza por una letra y tiene al menos 5 caracteres sin espacios iniciales y finales*/
        
    }

    static function isMaxLength($value, $length) {

            $longitud = strlen($value);
            
            if($longitud <= $length){
                return true;
            }
                return false;
    }

    static function isMinLength($value, $length) {

            $longitud = strlen($value);
            
            if($longitud >= $length){
                return true;
            }
                return false;
    }

    static function isNumber($value) {        
        return is_numeric ($value);
        
    }

    static function isTime($value) {

    }

        
    static function isURL($value) {
             return filter_var($value, FILTER_VALIDATE_URL);
    }

}