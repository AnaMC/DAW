<?php
require 'Autoload.php';

class DataBase {
    private $conexion, $sentencia;
    
    function __construct($clase = Constants) {
        try{
        $this->conexion=new PDO(
                'mysql:host='. $clase::SERVER . ';dbname=' . $clase::DATABASE,
                $clase::USER,
                $clase::PASSWORD,
                array(
                    PDO::ATTR_PERSISTENT => true,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'
                )
            );
        }catch(PDOException $e){
            $this->conexion=null;
        }
    }
    function execute($sql, array $parametros){
        $this->sentencia=$this->conexion->prepare($sql);
        foreach ($parametros as $key => $value) {
            $this->sentencia->bindValue($key, $value);
        }
        return $this->sentencia->execute();//True or false
        /*
        echo $sql . '<br>';
        echo Util::varDump($parametros);
        echo Util::varDump($this->sentencia->errorInfo());
        */
    }
    function getRowNumber(){
        return $this->sentencia->rowCount();
    }
    function getId(){
        return $this->conexion->lastInsertId();
    }
    function getSentence(){
        return $this->sentencia;
    }
            
    function isConnected(){
        return $this->conexion !== null;
    }
    
    function closeConnection(){
        $this->conexion = null;
    }
}
