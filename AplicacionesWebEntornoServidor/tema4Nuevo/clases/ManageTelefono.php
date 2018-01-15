<?php


class ManageTelefono{

    private $db;

    function __construct(Database $db) {
        $this->db = $db;
    }
    
    public function add($objeto) {

    
        $sql = 'INSERT INTO contacto(id, nombre) VALUES (null, :nombre)';
        $sql = 'INSERT INTO telefono(id, idContacto, telefono, descripcion) VALUES (null, :idContacto, telefono, :descripcion)';
        //Array de parámetros

        $params = array(
            'idContacto' => $objeto->getIdcontacto(),
            'idTelefono' => $objeto->getTelefono(),
            'idDescripcion' => $objeto->getDescripcion(),
            
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
        $sql = 'UPDATE telefono SET idContacto = :idContacto, telefono = :telefono, descripcion = :descripcion WHERE id = :id';
        
        $params = array(
            'idContacto' => $objeto->getIdcontacto(),
            'idTelefono' => $objeto->getTelefono(),
            'idDescripcion' => $objeto->getDescripcion(),
            'id' => $objeto -> getId()
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
        $sql = ' SELECT * FROM telefono ORDER BY nombre';
        $resultado = $this->db->execute($sql);
        $telefonos = array();
        if ($resultado) {
            $sentencia = $this->db->getStatement();

            while ($fila = $sentencia->fetch()) {
                $telefono = new Telefono();
                $telefono->set($fila);
                $telefonos[] = $telefono;
            }
            return $telefonos;
        }
    }

    public function remove($id) {
        $sql = ' DELETE FROM telefono WHERE id = :id';
        $params = array(
            'id' => $id
        );
        $resultado = $this->db->execute($sql, $params); //Devuelve true/false
        if ($resultado) {
            $filasAfectadas = $this->db->getRowNumber();
        } else {
            $filasafectadas = -1; 
        }
    }

    

}
