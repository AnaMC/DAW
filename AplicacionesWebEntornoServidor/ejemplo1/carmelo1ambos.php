<?php
              
    //$nombre = $_GET['nombre']; /*Las variables SIEMPRE deben llamarse  como los parámetros*/
    //$apellidos = $_GET['apellidos'];
   // $mensaje = " Hola $nombre $apellidos";
   
   //Para gestionar tanto get cmo post
   
 
    if(isset($_POST['nombre'])){  //isset comprueba si ha llegado algun dato con ese nombre, antes de hacer el pst/get debems hacer esta comprobación,
//	así quitaremos el mensaje de error (notice) HAY QUE PONERLO SIEMPRE Y PARA CADA CAMPO


	   $nombreP = $_POST ['nombre'];
   }
   
    if(isset($_GET['nombre'])){
	   $nombreP = $_GET ['nombre'];
   }
   
    $nombreP = $_POST ['nombre'];
	$nombreG = $_POST ['nombre'];
		if ($nombreP == null){
			$mensaje = $nombreG;
		}else{
			$mensaje = $nombreP;
		}         
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