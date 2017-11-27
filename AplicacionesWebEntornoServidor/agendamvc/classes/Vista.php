<?php

class Controlador{
    
    private $modelo;
    
    function __contruct(Modelo $modelo){
        this->modelo = $modelo;
    }
    
    function getModel(){
        return $this->modelo;
    }
    
    function render($accion){  /*En vez de tener un index tiene un render al que le llega una acción que le llega de dooptput (Controlador frontal)*/
        return $this->getModel()->getDato;
    }
    
    
}