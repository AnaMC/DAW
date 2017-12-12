<?php
require'../../classes/AutoLoad.php';
$sesion = new Session('agenda');
$usuarioSesion = $sesion->getUser();

/*Recogemos los datos del formulario*/
$nombreContacto = Request::read('contacto');  
$nombreTelefono = Request::read('telefono');
$nombreDescripcion = Request::read('descripcion');

$contacto = new Contacto(null , $usuarioSesion->getId(), $nombreContacto);  /*Creamos los objetos contacto y telefono*/


/*Comprobacion de ususario activo*/
if($usuarioSesion === null){
    header('Location: ../index.php'); 
}

$db = new DataBase();
$managerC = new ManageContacto($db);
$managerT = new ManageTelefono($db);

$resultadoC = $managerC->add($contacto);
$telefono = new Telefono(null, $resultadoC, $nombreTelefono, $nombreDescripcion); /*ResultadoC es el ID con el que se ha insetado el contacto*/
$resultadoT = $managerT->add($telefono);
$db->closeConnection();

