<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManageContacto
 *
 * @author daw
 */
class ManageContacto implements Manager {

    private $db;

    function __construct(Database $db) {
        $this->db = $db;
    }

    /**
     * Metodo que realiza el alta de un contacto nuevo 
     * @param Contacto $objeto* Debe ser un objeto de la  clase contacto. que se va a insertar en la BD
     * @return int Es el código autonumérico del objeto uinsertado, en caso de éxito. En caso de error es el 0.
     */
    public function add(Contacto $objeto) {

        //Sentencia preparada

        $sql = 'INSERT INTO contacto(id, nombre) VALUES (null,nombre)';
        //Array de parámetros

        $params = array(
            'nombre' => $objeto->getNombre()
        );
        $resultado = $this->db->execute($sql, $params); //Devuelve true/false
        if ($resultado) {
            $id = $this->db->getId();
            $objeto->setId($id);
        } else {
            $id = 0;
        }

        return $id;
    }

    public function edit($objeto) {
        $sql = 'UPDATE contacto SET nombre= :nombre WHERE id = :id';
        $params = array(
            'nombre' => $objeto->getNombre(),
            'id' => $objeto->getId()
        );
        $resultado = $this->db->execute($sql, $params); //Devuelve true/false
        if ($resultado) {
            $filasAfectadas = $this->db->getRowNumber();
            $objeto->setId($id);
        } else {
            $filasafectadas = -1; /* Menos 1 significa que la operación ha fallado, 0 es que no ha ahabido modificación, 1 es que ha habido modificación */
        }

        return $id;
    }

    public function get($id) {
        $sql = 'SELECT * FROM contacto WHERE id = :id';

        $params = array(
            'id' => $id
        );
        $resultado = $this->db->execute($sql, $params); //Devuelve true/false
        $sentencia = $this->db->getStatement();
        $contacto = new Contacto();
        if ($resultado && $fila = $sentencia->fetch()) {
            $contacto->set(fila);
        } else {
            $contacto = null; // Si la consulta fallla o no encuentra el contacto
        }
    }

    public function getAll() {
        $sql = ' SELECT * FROM contacto ORDER BY nombre';
        $resultado = $this->db->execute($sql);
        $contacto = array();
        if ($resultado) {
            $sentencia = $this->db->getStatement();

            while ($fila = $sentencia->fetch()) {
                $contacto = new Contacto();
                $contacto->set($fila);
                $contactos[] = $contacto;
            }
            return $contactos;
        }
    }
    
    public function remove($id) {
        $sql = ' DELETE FROM contacto WHERE id = :id';
        $params = array(
            'id' => $id
        );
        $resultado = $this->db->execute($sql, $params); //Devuelve true/false
        if ($resultado) {
            $filasAfectadas = $this->db->getRowNumber();
        } else {
            $filasafectadas = -1; /* -1 significa que la operación ha fallado, 0 es que no ha ahabido modificación, 1 es que ha habido modificación */
        }
    }
   
}
