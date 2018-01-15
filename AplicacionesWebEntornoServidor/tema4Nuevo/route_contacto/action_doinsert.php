<?php
    
    require '../clases/AutoLoad';

    $nombre = Request::Read('nombre'); /*Campo que acabamos de leer*/
    
    $db = new Database(); /*Conexion con la BD*/
    $gestor = newManageContacto($bd);

    $contacto = new Contacto (null, $nombre);
    
    $gestor.add($contacto);

?>