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
         require './Request';
         require './CuentaBancaria';
         require './Util.php';
         $cuenta = newCuenttaBancaria();
         $cuenta->read(); //leer la cuenta
        
         echo cuenta;
         
         $arrayNormal = array (
             'pepito Perez', '123454678H', '1980-03-31' , ES12345678913456, 1234.56
         );
         
         //Otra forma
         
         $arrayNormal2 = array (
             0 => 'Pepito Perez',
             1 => '123454678H',
             2 => '1980-03-31',
             3 => 'ES12345678913456',
             4 => '1234.56'
         );
         
         $arrayNormal3 =[];
         $arrayNormal3 = 'Pepito Perez';
         $arrayNormal3 = '123454678H';
         $arrayNormal3 = '1980-03-31';
         $arrayNormal3 = 'ES12345678913456';
         $arrayNormal3 = 1234.56;
         $arrayAsociativo = (
                 'titular' => 'pepito p'
                 'numeroCuenta' => '123454678H'
                 'fechaNacimiento' => '1980-03-31'
                 'numeroCuenta' => 'ES12345678913456'
                 'saldo' =>  1234.56
                 );
         
         ?>
    </body>
</html>
