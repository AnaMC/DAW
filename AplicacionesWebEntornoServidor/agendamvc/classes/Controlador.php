<?php

class Controlador{
    
    private $modelo;
    
    function __contruct(Modelo $modelo){
        this->modelo = $modelo;
    }
    
    function getModel(){
        return $this->modelo;
    }
    
    function index(){
        $this->getModel()->setDato('Estoy en la ruta Index en la acción Index');
    }
    
    
}