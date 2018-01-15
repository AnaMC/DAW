<!DOCTYPE html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <body>
            <?php
            require './Estudiante.php';
            require './Util.php';
            $e = new Estudiante ('pepe','Perez Lopez');
            echo '<h1>Eres: ' . $e->getNombre() . ' '. $e->getApellidos() . '</h1>';
            ?>
            
            <h2>Vamos a realizar una introspeccion: </h2>
            <?php
            $e->introspeccion();
            echo '<hr>';
            echo Util::varDump($e ->getAtributos());
            echo Util::varDump($e ->getValores());
            echo Util::varDump($e ->getValoresAtributosAtributos());
            ?>
        </body>
</html>