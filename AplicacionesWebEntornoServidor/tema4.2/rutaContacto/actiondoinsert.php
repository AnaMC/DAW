<?php

    require '../clases/AutoLoad.php';
    
    $contacto = newContacto();
    
    $contacto -> read(); /*Lo leemos entero*/
    
    echo Util::varDump($contacto);
    
    $sql = 'Insert ito Contacto (nombre) values (:nombre)';
    
    $params =array(
      'nombre' => $contacto->getNombre()  
    );
    
    $bd = new DataBase();
    $res = $bd -> execute($sql, $params); /*True / False*/
    if($res){
       /* $id=$bd->getId()
        $numRow = $bd->getRowNumber();
        echo 'el id es: ' .$id . 'y el numero de filas es: ' .$numRow;*/ 
    }
     
    $id = $bd->getRowNumber(); 