<?php

class DataBase {
    
    private $conexion, $sentencia;

    function __construct($clase = 'Constants') {
        try{
            $this->conexion = new PDO( /*Inyeccion SQL tiene consultas preparadas "mejoradas" y "acceso único, nuestro sitio será menos atacable. Sirve para MySQL y otras BD"*/
                'mysql:host=' . $clase::SERVER . ';dbname=' . $clase::DATABASE,
                $clase::USER,
                $clase::PASSWORD,
                array(
                    PDO::ATTR_PERSISTENT => true,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'
                )
            );
        } catch (PDOException $e){
            $this->conexion = null;
        }
    }

    function execute($sql, array $parametros = array()) {
        $this->sentencia = $this->conexion->prepare($sql); /*$this->sentencia hace referencia al atributo sentencia */
        foreach ($parametros as $nombreDelParametro => $valorDelParametro) {
            $this->sentencia->bindValue($nombreDelParametro, $valorDelParametro); /*Guardamos los parametros que nos han llegado en la sentencia sql*/
        }
        $r = $this->sentencia->execute();//true o false /*Ejecutamos la sentencia sql*/
        /*
        echo $sql . '<br>';
        echo Util::varDump($parametros);
        echo Util::varDump($this->sentencia->errorInfo());
        //*/
        return $r;
    }
    
    function isConnected() {
        return $this->conexion !== null;
    }
    
    function closeConnection() {
        $this->conexion = null;
    }
    
    function getRowNumber() {
        return $this->sentencia->rowCount();
    }
    
    function getId() {
        return $this->conexion->lastInsertId();
    }
    
    function getStatement(){
        return $this->sentencia;
    }
}