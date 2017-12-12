<?php

require'../../classes/AutoLoad.php';

$sesion = new Session('agenda');
$usuario = $sesion->getUser();

/*Comprobacion de ususario activo*/
if($usuario === null){
    header('Location: ../../index.php'); /*Redireccion del usuario no logueado*/
    exit;
}

    echo '¡LOGUEADO!';
    
?>
<br>
<br>
<a href= viewAltaContacto.php> <button>Añadir nuevo contacto</button> </a> 
<a href= ../../usuario/dologout.php> <button>Cerrar sesion</button> </a> 