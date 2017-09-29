<?php
              
    $nombre = $_GET['nombre']; /*Las variables SIEMPRE deben llamarse  como los parámetros*/
    $apellidos = $_GET['apellidos'];
    $mensaje = " Hola $nombre $apellidos";
             
 ?>

<!DOCTYPE html>

<html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $mensaje ?></title>
        <meta name="description" content="Practica sobre formularios">
        <link rel="stylesheet" href="style.css">        
    </head>
    
    <body>
        
        <div>
            <?php
                echo "<h1>$mensaje<h1>";
             ?>
        </div>
        
    </body>
    
    <footer>
    </footer>
    
</html>