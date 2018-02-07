<?php
require 'classes/AutoLoad.php';

$productos = array (
    new Producto(0, 'pan', 0.50),
    new Producto(1, 'chapata', 0.85),
    new Producto(2, 'rosca', 1.15)
);

$id = $_GET['id'];
$producto = $productos[$id];

$sesion = new Session();
$carrito = $sesion->get('carrito');
if($carrito === null) {
    $carrito = new Carrito();
}

$carrito->add($producto->getId(), 1, $producto);
$sesion->set('carrito', $carrito);
header('Location: carrito.php');