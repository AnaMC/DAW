<?php

class ControladorUsuario extends Controlador { 

    function __construct(Modelo $modelo) {
        parent::__construct($modelo);
    }

    function index() {
        if($this->isLogged()){
            $this->getModel()->setDato('archivo', 'plantilla/index.html');
            $this->getModel()->setDato('usuario', 'Juanito López');
        } else {
            $this->getModel()->setDato('archivo', 'plantilla/login.html');
            // $this->getModel()->setDato('contenido', file_get_contents('plantilla/bootstrap/_presentacion.html'));
        }
    }
    
    function registro() {
        $usuario = new Usuario();
        $usuario->read();
        $claveRepetida = Request::read('claveRepetida');
        $resultado = -1;
        
        if(Filter::isEmail($usuario->getCorreo()) && $usuario->getClave() === $claveRepetida && $claveRepetida !== '') {
            $resultado = $this->getModel()->registrar($usuario);
        }
        header('Location: index.php?ruta=index&accion=registro&op=registrar&res=' . $resultado);
        exit();
    }
}