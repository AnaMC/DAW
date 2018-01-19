<?php 
    Class ControladorAjax extends Controlador{
        
        function listadocompleto(){
            $u1 = new Usuario(1,'correo', 'clave',1);
            $u1 = new Usuario(2,'correo2', 'clave2',0);
            $usuarios = $this->getModel()->getUsuariosParaJson();
            $this->getModel()->setDato('listado', array('tio1','tio2'));
        }
        
    }
    
/*
    Tengo un objeto Usuario, lo convierto en un array asociativo (getAtributesValues)
    En la vista hago json_encode de ese array asociativo y se convierte a JSON.
*/