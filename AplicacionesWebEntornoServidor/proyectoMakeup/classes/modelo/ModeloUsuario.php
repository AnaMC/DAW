<?php

class ModeloUsuario extends Modelo {

    function addUsuario(Usuario $usuario){
        $manager = new ManageUsuario($this->getDataBase());
        $resultado = $manager->addUsuario($usuario);
        if($resultado > 0) {
            return $usuario->getId();
        }
        return -1;
    }

    function login(Usuario $usuario){
        $manager = new ManageUsuario($this->getDataBase());
        $usuarioBD = $manager->getFromCorreo($usuario->getCorreo());
        $r = false;
        if($usuarioBD !== null) {
            $verifica = Util::verificarClave($usuario->getClave(), $usuarioBD->getClave());
            if($verifica && $usuarioBD->isVerificado() === '1') {
                $r = $usuarioBD;
            }
        }
        return $r;
    }

    function verificarUsuario($id, $data) {
        $manager = new ManageUsuario($this->getDataBase());
        $usuarioBD = $manager->get($id);
        $r = -1;
        if($usuarioBD !== null) {
            $sha1 = sha1($usuarioBD->getId() . $usuarioBD->getCorreo());
            if($data === $sha1) {
                $usuarioBD->setVerificado(1);
                $r = $manager->editSinClave($usuarioBD);
            }
        }
        return $r;
    }
    
    function registrar(Usuario $usuario) {
        $manager = new ManageUsuario($this->getDataBase());
        $resultado = $manager->addUsuario($usuario);
        return $resultado;
    }
    
    function getUsuarios() {
        $manager = new ManageUsuario($this->getDataBase());
        return $manager->getAll();
    }
    
    function loguear(Usuario $usuario) {
        $r = -1;
        $manager = new ManageUsuario($this->getDataBase());
        $usuarioBD = $manager->getFromCorreo($usuario->getCorreo());
        if($usuarioBD === null) {
            $r = -1;
        } else {
            $r = Util::verificarClave($usuario->getClave(), $usuarioBD->getClave());
            if($r) {
                $r = $usuarioBD; //Guardado del usuario  completo en la sesión
            } else {
                $r = 0;
            }
        }
        return $r;
    }
    
    function borrarUsuario($usuario){
        $manager = new ManageUsuario($this->getDataBase());
        return $manager -> remove($usuario->getId()); //getId sale de usuario.php q es el q tiene el metodo para sacar el id
    }
    
 function obtenerUsuario($id){               
     $manager = new ManageUsuario($this->getDataBase());
     return $manager->get($id);
}

function editarUsuario(){       /*Pisará*/
    
}

    
}