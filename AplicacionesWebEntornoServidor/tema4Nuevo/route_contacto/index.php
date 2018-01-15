<?php
require '../clases/AutoLoad.php';
$db = new DataBase();
$gestor = new ManageContacto($db);
$listaDeContactos = $gestor->getAll();
?>
    <!DOCTYPE html>
    <!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <html>

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <!--OPERACIONES A NECESITAR:
                1.Listado de los contactos      -> getAll()
                2.Insertar un contacto          -> add(contacto c)
                3.Editar un contacto            -> edit(contacto c)                 /*ESTOS SON LOS 5 Métyodos que vamos a utilizar*/
                4.Borrar un contacto            -> remove(id)
                5.Listado de un contacto        ->get(id)
        -->
        <h1>GESTIÓN DE CONTACTOS</h1>
  
        <h2><a href="action_viewinsert.php"></a></h2>
        
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                            <th></th>
                            <th></th>
                </tr>
            </thead>
            <?php
            foreach ($listaDeContactos as $key => $contacto){
            ?>
                <tbody>
                    <tr>
                        <td>
                            <?phpecho $contacto->getId();?>
                        </td>
                        <td>
                            <?=$contacto->getNombre()?>
                        </td>
                        <!--
                    <td>editar: enlace al archivo action_viewedit.php?id=ID</td>
                    <td>editar: enlace al archivo action_viedelete.php?id=ID</td>
                        En action_viewedit:mostrar un formulario prerelleno con los datos del ususario.
                        En action_viewdelete:¿De verdad quieres borrar a NOMBRE?
                    -->
                        <td><a href="action_viewedit.php?id=<? $contacto->get->getId() ?>"> Editar </a></td>
                        <!--SIEMPRE HAY QUE PASAR COMO PARÁMETRO EL VALOR DE LA CLAVE PRINCIPAL DE LA CLASE DE LA TABLA-->
                        <td><a href="action_viewedelete.php?id=<? $contacto->get->getId() ?>"> Eliminar </a></td>

                    </tr>
                    <?php
                }
                ?>
                </tbody>
        </table>



    </body>

    </html>
