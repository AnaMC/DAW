<?php
require '../classes/AutoLoad.php';
$db = new DataBase();

$gestor = new ManageContactoTelefono($db);
$listaDeContactosTelefonos = $gestor->getAll();

$action = Request::read('action');
$result = Request::read('r');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Gestión integral de contactos y sus teléfonos</h1>
        <h2><a href="action_viewinsert.php">insertar contacto</a></h2>
        <table border="1">
            <thead>
                <tr>
                    <th>número</th>
                    <th>nombre</th>
                    <th>teléfono</th>
                    <th>descripción</th>
                    <!--<th>...</th>-->
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listaDeContactosTelefonos as $key => $contactoTelefono) {
                    $contacto = $contactoTelefono['contacto'];
                    $telefono = $contactoTelefono['telefono'];
                    ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><a href="action_vieweditcontacto.php?idcontacto=<?php echo $contacto->getId();?>"><?= $contacto->getNombre() ?></a></td>
                        <td><a href="action_viewedittelefono.php?idtelefono=<?php echo $telefono->getId();?>"><?= $telefono->getTelefono() ?></a></td>
                        <td><?= $telefono->getDescripcion() ?></td>

                        <!--<td>
                            <a href="action_viewedit.php?id=< ?= $contacto->getId() ?>">
                                Editar
                            </a>
                        </td>-->
                        <td>
                            <a href="action_viewdelete.php?idcontacto=<?= $contacto->getId() ?>&idtelefono=<?= $telefono->getId() ?>">
                                <!--action_viewdelete.php?idcontacto=IDCONTACTO&idtelefono=IDTELEFONO-->
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
<?php
$db->closeConnection();