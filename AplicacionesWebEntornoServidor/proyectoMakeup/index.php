<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

date_default_timezone_set('Europe/Madrid');

require 'classes/AutoLoader.php';

$accion = Request::read("accion");
$ruta = Request::read("ruta");

$controladorFrontal = new ControladorFrontal($ruta);

$controladorFrontal->doAction($accion);
echo $controladorFrontal->doOutput($accion);