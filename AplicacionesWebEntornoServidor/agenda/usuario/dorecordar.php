<?php
require'../classes/AutoLoad.php';
require'../classes/vendor/AutoLoad.php';
date_default_timezone_set('Europe/Madrir'); /*Definimos la zoa horaria*/
$sesion = new Session('agenda');
$usuario = $sesion->getUser();
if ($usuariio !== null){
    header('Location: ../index.php');
    exit;
}

$correo = Request::read('correo');
if(Filter ::isEmail($correo)){ /*&& correo está en la BD*/
    $manager = new ManageUsario($db);
    $usuarioBD = $manager -> getFormCorreo($correo);
    if($usuarioBD !== null){
        $enlace = ''; /*meter url de restablecer*/
        $codificar = sha1($usuarioBD->getId() . 'al azar' . $usuarioBD->getCorrep());
        $enlace .= 'dato' = $codificar;
        echo $enlace . '<br>';
        
        $array = array(
            'correo' => $usuarioBD->getCorreo(),
            'id' => $usuarioBD->getId(),
            'fecha' => date('Y/d/m H:I:S') /*Tenemos que especificar como queremos la fecha y la hora*/
        );
        
        $clave = 'mipalabrasecreta';
        
        $jwt = JWT::encode($array, $clave);
        $enlace = ''; /*Ruta de restablecer.php*/
        $enlace .= 'dato=' . $jwt;
        echo $enlace . '<br>';
        //Util::enviarCorreo($usuarioBD->getCorreo(), 'AppAgenda', 'Mensaje con el enlace de recuperacion: ' . $enlace);
        Util::enviarCorreo('troglodita91@gmail.com', 'AppAgenda','Mensaje con el enlace de recuperacion: ' . $enlace);
    }
}