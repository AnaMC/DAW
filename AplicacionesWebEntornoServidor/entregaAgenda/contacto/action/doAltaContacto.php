<?php

$sesion = new Session('agenda');
$usuarioSesion = $sesion->getUser();

/*Comprobacion de ususario activo*/
if($usuarioSesion !== null){
    header('Location: ../index.php'); 
}

$db = new DataBase();
$managerC = new ManagerContacto($db);
$managerT = new ManagerTelefono($db);
$resultadoC = $managerC->add($contacto);
$resultadoT = $managerT->add($telefono);
$db->closeConnection();
