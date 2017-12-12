<?php
require'../classes/AutoLoad.php';
$usuario = new Usuario();
$usuario->read();
$sesion = new Session('agenda');
$usuarioSesion = $sesion->getUser();

/*Comprobacion de ususario activo*/
if($usuarioSesion !== null){
    header('Location: ../index.php'); 
}

$db = new DataBase();
$manager = new ManageUsuario($db);
$usuarioBD = $manager->getFromCorreo($usuario->getCorreo());
if($usuarioBD === null) {
    $sesion->logout();
    $r = -1;
} else {
    $r = Util::verificarClave($usuario->getClave(), $usuarioBD->getClave());
    if($r) {
        $sesion->login($usuarioBD);
        $r = 1;
    } else {
        $sesion->logout();
        $r = 0;
    }
}

$db->closeConnection();

header('Location: ../index.php?op=login&r=' . $r);