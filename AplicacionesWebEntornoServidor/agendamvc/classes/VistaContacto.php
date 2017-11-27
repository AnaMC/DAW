<?php

class VistaContacto extends Contacto{
    
    function render($accion){
        echo '180º empieza el render<br>';
        return '<span style="color: #ff00ff;">'.$this->getModel()->getDato().'</span>';
    }
    
}