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

$cabecera = $cabeceras['autorization'];
echo 'la cabecera de la autorización es: ' . $cabecera;
$partesCabecera =explode(''.$cabecera); //EXPLODE -> separa la cadena en un array por palabras
if($partesCabecera[0] === 'Basic'){
    $descifrado = base64_decode($partesCabecera[1]);
    echo '<br>' . $descifrado;
    echo "\nusuario: " . $parteusuario[0];
    echo "\nclave" . $parteusuario [1];
    $fecha = new DateTime();
    $token = array(
        'usuario' => $parteusuario[0],
        'tiempodevida' => $fecha -> getTimestamp() + 10 * 60
        );
    //$token = JWT::encode($token, 'clavesecreta');
    $token = json_encode($token);
    echo $token;
}
if($partesCabecera[0] === 'Bearer'){
    $token = $partesCabecera[1];
    //$tokenDescifrado = JWT::decode($token, 'clavesecreta', 'HSA512');
    $tokenDescifrado = json_decode($token);
    echo 'eres el usuario: ' . $tokenDescifrado->usuario;
    echo 'tu tiempo de vida es: ' . $tokenDescifrado->tiempodevida;
    $fecha = new DateTime();
    if($tokenDescifrado->tiempodevida > $fecha->getTimestamp()){
        echo 'sigues siendo valido';
    } else {
        echo 'token expirado';
    }
    $token = array(
        'usuario' => $partesUsuario[0],
        'tiempodevida' => $fecha->getTimestamp() + 10 * 60
    );
    $token = json_encode($token);
    echo $token;
}

}   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    0
}
