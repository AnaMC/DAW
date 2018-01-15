<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author daw
 */
class CuentaBancaria {
    private $titular;
    private $dni;
    private $fechaNacimiento;
    private $numeroCuenta;
    private $saldo;
    
    function getTitular() {
        return $this->titular;
    }

    function getDni() {
        return $this->dni;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getNumeroCuenta() {
        return $this->numeroCuenta;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setTitular($titular) {
        $this->titular = $titular;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setNumeroCuenta($numeroCuenta) {
        $this->numeroCuenta = $numeroCuenta;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

function __toString() {
    return 'titular: ' . this->titular . '<br>dni: ' . this->dni;
}
 
function setArray(){}

function sertRead(){}

function setFase1($array, $pos = 0){
    foreach ($this as $campo => $valor){
        if(isset($array[$pos])){
            $this->$campo = $array[$pos];
        }
        $pos++;
    }
}
    
function setAsociativo($array){
    foreach ($array as $indce => valor){
        
    }
}
    
    
}
