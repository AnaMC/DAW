<?php

class Enrutador {
    
    private $rutas = array();

    function __construct() {
        //$this->rutas['index'] = new Ruta('Modelo', 'VistaBootstrap', 'Controlador');
        //$this->rutas['inofensiva'] = new Ruta('ModeloInofensivo', 'VistaInofensiva', 'ControladorInofensivo');
        //$this->rutas['contacto'] = new Ruta('Modelo', 'VistaContacto', 'ControladorContacto');
        //esta applicación por ahora sólo va de usuarios
        $this->rutas['index'] = new Ruta('ModeloUsuario', 'VistaBootstrap', 'ControladorUsuario');
        $this->rutas['ajax'] = new Ruta('ModeloUsuario', 'VistaAjax', 'ControladorAjax');
    }

    function getRoute($ruta) {
        if (!isset($this->rutas[$ruta])) {
            return $this->rutas['index'];
        }
        return $this->rutas[$ruta];
    }
}