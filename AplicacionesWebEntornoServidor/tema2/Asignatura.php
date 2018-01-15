<?php

class Asignatura{

     private $nombre;
     private $horas;
    
    function __construct($nombre, $horas) {
        $this->nombre = $nombre;
        $this-> horas = $horas;        
     }
     
     function getNombre() {
         return $this->nombre;
     }

     function getHoras() {
         return $this->horas;
     }

     function setNombre($nombre) {
         $this->nombre = $nombre;
     }

     function setHoras($horas) {
         $this->horas = $horas;
     }
     function getValoresAtributos(){
         $valoresCompletos = [];
         foreach ($this as $atributo => $valor){
             $valoresCompletos[$atributo] = $valor;
         }
         return $valoresCompletos;
     } 
       
     public function __toString() {
         return $this -> nombre . '' . $this -> horas;
     }
     
     $valor = 8;
     $nuevoValor = $valor;
     $nuevoValor = $valor + 1;
     $asig4 = $asig3;  // A asig4 se le asigna el valor de assig 3, al actuar como objetos, si se cambia el valor de uno cambiará el valor de los dos. En el caso de que actuaran como valores "normales", esto no ocurriría.
     $asig4 -> setHoras($asig4 -> getHoras() +1);
     
     echo $asig3 . '<br>';
     echo $asig4 . '<br>';
     
    // M // 
     

}