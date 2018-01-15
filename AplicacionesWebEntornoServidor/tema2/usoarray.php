<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $miarray[]= array();
        $miotroarray = [];
        
        $miarray[] =array();
        $miarray[] = 'uno';
        $miarray[] = 'dos';
        $miarray[] = 'tres';
        $miarray[] = '23';
        $miarray[] = 'cuatro';
        $miarray[11] = 'cuatro';
        $miarray[Hola] = 'cuatro'; //Tanto 11 como Hola son posiciones
        $miarray[] = array('1'=>1, 'otro'=>algo);
        
        foreach ($miarray as $key => $value){
            echo '$key $value' <br>;
            
            //copiar if
                       
            
        } 
        ?>
    </body>
</html>
