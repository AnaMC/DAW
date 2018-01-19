<?php
    
Class VistaAjax extends Vista{
    
    function render($accion){
      header('content-Type: application/json'):
      return json_encode($this->getModel()->getDatos());  
    }            
}