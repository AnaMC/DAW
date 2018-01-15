<?php

class Estudiante{
    
    private $nombre, $apellidos;
    private static $centro;
    
    function __construct($nombre ,$apellidos = null) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }
    
    function  setNombre(){
        return $this->nombre;
    }
    
    function setApellidos(){
        return $this->apellidos;
    }
    static function setCentro(){
        self::$centro;
    
    function introspeccion(){
        //sintaxis 2: foreach ($variable que vamos a recorrer as $indice => $valor)
        //sintaxis 1: foreach ($variable as $valor)
        foreach($this as $atributo => $valor){
            echo "el atributo $atributo tiene el valor $valor \n";
        }
    }
     
    }
    
    function getAtributos(){
        $atributos = [];
        foreach($this as $atributo => $valor){
            $atributos[] = $atributo;
        }
        return $atributo;
    }
    
    function getValores(){
        $valores = [];
        foreach ($this as $valor){
            $valores[] = $valor;
        }
            return $valores;
    }
    
    function getValoresAtributos(){
        $valoresCompletos = [];
        foreach ($this as $atributo => $valor){
            $valoresCompletos[$atributo] = $valor;
        }
        return $valoresCompletos;
    }
    
    function read(){
        foreach ($this as $atributo => $valor){
            $atributo = Request::read($atributo);
    }
    
}