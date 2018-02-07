<?php

class Carrito {
    
    private $carrito = [];
    
    function __construct() {
        
    }
    
    function addLinea(Linea $producto) {
        if((isset($this->carrito[$producto->getId()]))) {
            $productoPrevio = $this->carrito[$producto->getId()];
            $productoPrevio->setCantidad($productoPrevio->getCantidad() + $producto->getCantidad());
            $this->carrito[$productoPrevio->getId()] = $productoPrevio;
        } else {
            $this->carrito[$producto->getId()] = $producto;
        }
    }

    function add($id, $cantidad = 1, $producto = null) {
        $this->addLinea(new Linea($id, $producto, $cantidad));
    }
    
    function delLinea(Linea $producto) {
        unset($this->carrito[$producto->getId()]);
    }

    function del($id) {
        $this->delLinea(new Linea($id));
    }

    function subLinea(Linea $producto) {
        if((isset($this->carrito[$producto->getId()]))) {
            $productoPrevio = $this->carrito[$producto->getId()];
            $productoPrevio->setCantidad($productoPrevio->getCantidad() - $producto->getCantidad());
            if($productoPrevio->getCantidad() < 1) {
                $this->delLinea($productoPrevio);
            } else {
                $this->carrito[$productoPrevio->getId()] = $productoPrevio;
            }
        }
    }

    function sub($id, $cantidad = 1) {
        $this->subLinea(new Linea($id, null, $cantidad));
    }
    
    function getCarrito() {
        return $this->carrito;
    }
    
    
}