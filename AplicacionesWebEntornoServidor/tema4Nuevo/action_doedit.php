<?php
    require '../clases/AutoLoad.php';
    $telefono = new Telefono();
    $telefono ->read();

    $db = new DataBase();
    $gestor = new ManageTelefono($db);
    $r = $gestor /*******/
?>