<?php
require 'Util.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $meses = array();
        $meses[] = "enero";
        $meses[] = "febrero";
        $meses[] = "marzo";
        $meses[] = "abril";
        $meses[] = "mayo";
        $meses[] = "junio";
        $meses[] = "julio";
        $meses[] = "agosto";
        $meses[] = "septiembre";
        $meses[] = "octubre";
        $meses[] = "noviembre";
        $meses[] = "diciembre";
        
       echo Util::varDump($meses);
       
        $meses2 = array();
        $meses2[] = "enero";
        $meses2[] = "febrero";
        $meses2[] = "marzo";
        $meses2[] = "abril";
        $meses2[] = "mayo";
        $meses2[] = "junio";
        $meses2[] = "julio";
        $meses2[] = "agosto";
        $meses2[] = "septiembre";
        $meses2[] = "octubre";
        $meses2[] = "noviembre";
        $meses2[] = "diciembre";
        
       echo Util::varDump($meses2);
       
       $diasemana = array ('lunes','martes','miercoles', 'jueves', 'viernes', 'sabado','domingo');
       
       echo Util::varDump($diasemana);
       
      
        $diasmes = array();
        $diasmes['enero'] = 31;
        $diasmes['febrero'] = 30;
        $diasmes['marzo'] = 31;
        $diasmes['abril'] = 30;
        $diasmes['mayo'] = 31;
        $diasmes['junio'] = 30;
        $diasmes['julio'] = 31;
        $diasmes['agosto'] = 30;
        $diasmes['septiembre'] = 31;
        $diasmes['octubre'] = 30;
        $diasmes['nobiembre'] = 31 ;
        $diasmes['diciembre'] = 30;
        
        echo Util::varDump($diasmes);
        
        for ($i=0; $i < count($meses); $i++){
            echo $i . '' . $meses[$i] . '<br>';
        }
        
        foreach ($meses as $indice => $mes){
            echo $indice . '' .$mes . '<br>';
        }
        
        foreach ($meses as $mes) {
             echo $mes . '<br>';
        }
        
        $semanadia =[];
        foreach ($diasemana as $numero => $diadelasemana){
            $semanadia[$diadelasemana] = $numero;
        }
        
        echo Util::varDump($diadelasemana);
        
        $alu1 = array('pepe', 'perez', 'dewes', 4.7);
        $alu2 = array('dfsdf', 'ddddd', 'dawe', 8.8);
        $alu3 = array('pepa', 'pereza', 'dase', 9.7);
        
        $alumno = array ($alu1, $alu2, $alu3);
        
        echo Util::varDump($alumno);
        
        //ARRAY DIMENSIONAL//
        
        $alum1 = array('nombre' => 'pepe','apellidos' => 'perez','asignatura' => 'dewes','nota' => 4.7 );
        $alum2 = array('nombre' => 'pepe','apellidos' => 'ghgh','asignatura' => 'dewes','nota' => 8.2 );
        $alum3 = array('nombre' => 'pepe','apellidos' => 'sdsdsd','asignatura' => 'dewes','nota' => 9.6 );
        
        $alumno2 = array($alum1,$alum2,$alum3);
        echo Util::varDump($alumno2);
        echo '<br>';
        
        $nota = 0;
        $notas = 0;
        foreach ($alumno2 as $alumno){
            foreach ($alumno as $j => $campo){
                if ($j === 'nota'){
                    $nota += $campo;
                    $notas++;
                }
            }
        }
        
        $notamedia = $nota/$notas;
        echo "La media de la clase es: " . $notamedia;
  
        ?>
    </body>
</html>
