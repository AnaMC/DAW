<?php

function varDump($valor){
    echo '<pre>' . var_export($valor, true) . '</pre>';   
}

echo 'yo soy el servidor rest';

$parametro = $_GET['parametro'];

echo '<br>parametro: ' . $parametro;
$parametrosURL = explode('/',$parametro);
varDump($parametrosURL);

$cabeceras = getallheaders();
varDump($cabeceras);

echo'<br> el metodo es:' . $_SERVER['REQUEST_METHOD'];

$parametrosBody = file_get_contents('php://input');
echo 'parametros del body: ';
varDump($parametrosBody);
$parametrosBodyJson = json_decode(file_get_contents('php://input'));
// Objeto php básico
echo $parametrosBodyJson->dato1;
echo '<br>';
echo $parametrosBodyJson->dato2;
varDump($parametrosBodyJson);
$parametrosBodyJson = json_decode(file_get_contents('php://input'), true);
varDump($parametrosBodyJson);