<?php

                                                        // COMPROBACIONES PARA POST

  if (isset($_POST['nombre'])){

	   $nombre = $_POST ['nombre'];  // con el ''name'', como son iguales solo se pone 1, si fueran diferentes si tendriamos que ponerlos
   }
   
  if (isset($_POST['apellidos'])){

	   $apellidos = $_POST ['apellidos'];  // con el ''name'', como son iguales solo se pone 1, si fueran diferentes si tendriamos que ponerlos
   }
   
  if (isset($_POST['telefono'])){

	   $telefono = $_POST ['telefono'];  // con el ''name'', como son iguales solo se pone 1, si fueran diferentes si tendriamos que ponerlos
   }
   
  if (isset($_POST['fecha'])){

	   $fecha = $_POST ['fecha'];  // con el ''name'', como son iguales solo se pone 1, si fueran diferentes si tendriamos que ponerlos
   }
   
  if (isset($_POST['correo'])){

	   $correo = $_POST ['correo'];  // con el ''name'', como son iguales solo se pone 1, si fueran diferentes si tendriamos que ponerlos
   }
   
                                                        //COMPROBACIONES PARA GET

    if (isset($_GET['nombre'])){
            
        $nombre = $_GET['nombre'];
    }

    if (isset($_GET['apellidos'])){
        
        $apellidos = $_GET['apellidos'];
            
    }

    if (isset($_GET['telefono'])){
        
        $telefono = $_GET['telefono'];
    }

    if (isset($_GET['fecha'])){
        
        $fecha = $_GET['fecha'];
    }

    if (isset($_GET['correo'])){
        
        $fecha = $_GET['correo'];
    }


?>

<!-->                                                            
                                                                // HTML PARA EL ENVÍO DE DATOS //

-->

<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="utf-8"/>
        <title>Formulario POST</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    
    </head>
    
    <body>
        
        <div>
            <?php
            
                echo "Hola" . $nombre ."de apellidos" . $apellidos;
             
            ?>
        </div>
    
    
    </body>
    
    
    
    
    
    
    
    
    
    
    
</html>

