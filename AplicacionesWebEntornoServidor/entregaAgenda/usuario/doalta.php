<?php
require'../classes/AutoLoad.php';
$usuario = new Usuario();
$usuario->read();
$claveRepetida = Request::read('claveRepetida');
$resultado = -1;

$sesion = new Session('agenda');
$usuarioSesion = $sesion->getUser();

/*Comprobacion de ususario activo*/
if($usuarioSesion !== null){
    header('Location: ../index.php'); /*Redireccion del usuario*/
    exit;
}

if(Filter::isEmail($usuario->getCorreo()) && $usuario->getClave() === $claveRepetida) {
    $claveEnriptada = Util::encriptar($usuario->getClave());
    $usuario->setClave($claveEnriptada);
    $db = new DataBase();
    $manager = new ManageUsuario($db);
    $resultado = $manager->addUsuario($usuario);
    //enviarCorreoVerificacion();
    $db->closeConnection();
} else {
    
}
header('Location: ../index.php?op=alta&r=' . $resultado);
//resultado:  0 -> correo ya existe
//           -1 -> correo incorrecto o claves no iguales
//            + -> ok

