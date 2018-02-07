<?php

class Linea {
    
    private $id, $item, $cantidad;
    
    function __construct($id, $item = null, $cantidad = 1) {
        $this->id = $id;
        $this->item = $item;
        $this->cantidad = $cantidad;
    }
    
    function getId() {
        return $this->id;
    }

    function getItem() {
        return $this->item;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setItem($item) {
        $this->item = $item;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }
}