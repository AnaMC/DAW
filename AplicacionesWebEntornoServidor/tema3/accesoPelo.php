<?php
require './clases/AutoLoad.php';   /*Arreglar autoLoad, no0 deberia tener que poner los requires que vienen a continuación.*/

//establezco la conexion (abrir, trabajar, cerrar)
$servidor = 'localhost:3306';
$baseDatos = 'dwes';
$usuario = 'udwes';
$clave = 'cdwes';
try{
    $conexion = new PDO(
        'mysql:host=' . $servidor . ';dbname=' . $baseDatos,
        $usuario,
        $clave,
        array(
            PDO::ATTR_PERSISTENT => true, //atributo de persistencia, crea un pool de conexiones, es una forma agil de distribuir las conexiones
            PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'
        )
    );
}catch (PDOException $e){
    //echo $e->errorInfo();
    $conexion = null; //deja libre 
}
if ($conexion === null) {
    //echo 'No se ha podido conectar';
    header('Location: error.html'); //como antes hemos hecho un echo y ya se han mandado datos al cliente, ya no se puede poner el header, estoen un servidor en condiciones falla, esta prohibido mandar la cabecera despues de la respuesta
    
    exit(); //Esto lo para todo y aqui acaba, de ahi palante nada
}
?>
<!doctype html>
<html>
<head></head>
<body>
    <h1>Conectado</h1>
    <?php
    //esto es solo de ejemplo, consultas sin preparar no
    //tres formas de hacer insert con distintos parametros
//    $sql = 'insert into car(id, marca, modelo) values (null, "ford", "fiesta")';
//    $res = $conexion->query( $sql );
//    echo Util::varDump($res);
//    
//    $sql = 'insert into car(marca, modelo) values ("mini", "cooper")';
//    $res = $conexion->query( $sql );
//    echo Util::varDump($res);
//    
//    $sql = 'insert into car values (null, "vw", "polo")';
//    $res = $conexion->query( $sql );
//    echo Util::varDump($res);
    
   /* $sql = 'insert into car values (null, "citroën", "c3")';
    $res = $conexion->query( $sql );
    if ($res !== false){
        $insertados = $res->rowCount();    
        echo 'Se han insertado ' . $insertados . '<br>';
        $id = $conexion->lastInsertId(); //da el id del ultimo elemento insertado sasdasd
        echo 'Se han insertado con el id ' . $id . '<br>';
    }   
    echo Util::varDump($res);*/
   /* $sql = 'delete from car where id = 10';
    $res = $conexion->query( $sql );
    echo Util::varDump($res);
    if ($res !== false){
        $borrados = $res->rowCount();    
        echo 'Se han borrado ' . $borrados . '<br>';
    }
    $sql = 'delete from car where marca = "nissan"';
    $res = $conexion->query( $sql );
    echo Util::varDump($res);
    if ($res !== false){
        $borrados = $res->rowCount();    
        echo 'Se han borrado ' . $borrados . '<br>';
    }*/
    /*$sql = 'UPDATE car SET marca="peugeot",modelo="207" WHERE id=14';
    $res = $conexion->query( $sql );
    echo Util::varDump($res);
    if ($res !== false){
        $borrados = $res->rowCount();    
        echo 'Se han modificado ' . $borrados . '<br>';
    }*/
    /*
    //$sql='select * from car order by marca, modelo';
    $sql = 'select * from contacto co left join telefono te on co.id=te.idContacto';
    $res = $conexion->query($sql);
    $consultadas = $res->rowCount(); /*El resultado del primer registro de la consulta lo llevamos a ''fila''*/
    echo 'Filas Seleccionadas: ' . $consultadas . '<br>';
    
    $contacto = new Contacto();
    $telefono = new Telefono();
        
    /*¿Qué hace este while? Lee -> asigna a fila .... hasta que a fila se le asigna false y se sale del while ¡ADIOS!*/
    while ($fila = $res->fetch()){  /*En algun momento devolverá un false  que se le asignará a fila*/
        $contacto->set($fila);
        echo $contacto . '<br>';
        $telefono->set($fila, 2);
        echo $telefono . '<br>';
        //echo Util::varDump($fila); /*Podemos observar un array asociativo*/
    }
    $res->closeCursor();
    
    ?>
</body>
</html>


<?php
/*cerrar la conexion*/
$conexion = null;
?>
