<?php
require'./classes/AutoLoad.php';
$op = Request::read('op'); /*Lee el parametro de la cabecera(post) o de la URL(get)*/
$r = Request::read('r');
$mensaje = '';
if($op !== null) {
    $mensaje = '<h1>Operación: ' .$op . ' ' . $r . '</h1>';
}
$sesion = new Session('agenda');

$usuario = $sesion->getUser();

/*Comprobacion de ususario activo*/
if($usuario !== null){
    header('Location: contacto/view/viewContactos.php'); /*Redireccion del usuario*/
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">      
        <title>Document</title>
    </head>
    <body>
        <?php
        echo $mensaje;
        ?>
        <h1>Agenda</h1>
        <hr>
       
        <h2>Darse de alta</h2>
        <form method="post" action="usuario/doalta.php">
            <input type="email" name="correo" placeholder="correo" required>
            <input type="password" name="clave" placeholder="clave" required>
            <input type="password" name="claveRepetida" placeholder="repite clave" required>
            <input type="submit" value="Submit"/>
        </form>
        <hr>
        
        
        <h2>Login</h2>
        <form method="post" action="usuario/dologin.php">
            <input type="email" name="correo" placeholder="correo" required>
            <input type="password" name="clave" placeholder="clave" required>
            <input type="submit" value="Submit"/>
        </form>
        
        <form method="post" action="usuario/restlogin.php">
        <br>
        <br>
        <input type="email" name="correo" placeholder="correo" required>
         <input type="submit" value="He olvidado mi contraeña"/>
        </form>
        
       
        <hr>
    </body>
</html>