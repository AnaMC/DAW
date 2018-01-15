<?php
    require './Asignatura.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $asig1 = new Asignatura();
        $asig2 = new Asignatura ('EEIE');
        $asig3 = new Asignatura ('DWES' , 8);
        
        
        echo $asig1 . '<br>';
        echo $asig2 . '<br>';
        echo $asig3 . '<br>';
       
        $asig4 = new Asignatura($asig3->getNombre(), $asig3->getHoras()); //ahora si tengo dos objetos independientes
        $asig4->setHoras($asig4->getHoras() + 1);
        
        ?>
    </body>
</html>
