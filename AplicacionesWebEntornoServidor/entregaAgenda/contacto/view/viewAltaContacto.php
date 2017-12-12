<?php

require'../../classes/AutoLoad.php';

$sesion = new Session('agenda');
$usuario = $sesion->getUser();

/*Comprobacion de ususario activo*/
if($usuario === null){
    header('Location: ../../index.php'); /*Redireccion del usuario no logueado*/
    exit;
}

?>

   <form method="post" action="../action/doAltaContacto.php">
            <input type="text" name="contacto" placeholder="Nombre: " required>
            <input type="text" name="telefono" placeholder="Telefono " required>
            <input type="text" name="descripcion" placeholder="Descripcion " required>
            
            <input type="submit" value="Submit"/>
    </form>