<?php

class ControladorUsuario extends Controlador { 

    function __construct(Modelo $modelo) {
        parent::__construct($modelo);
    }

    function index() {
        if($this->isLogged()){
            $this->getModel()->setDato('archivo', 'plantilla/index.html');
            
        } else {
            $this->getModel()->setDato('archivo', 'plantilla/login.html');
            // $this->getModel()->setDato('contenido', file_get_contents('plantilla/bootstrap/_presentacion.html'));
        }
    }
    
    function registrousuario(){
        $this->getModel()->setDato('archivo', 'plantilla/register.html');
    }
    
    function tablaUsuarios(){
        $this->getModel()->setDato('archivo', 'plantilla/tables.html');
        $this->administrador();
        
    }
    
    function registro() {
        $usuario = new Usuario();
        $usuario->read(); 
        $claveRepetida = Request::read('claveRepetida');
        $resultado = -1;
            
        if(Filter::isEmail($usuario->getCorreo()) && $usuario->getClave() === $claveRepetida && $claveRepetida !== '') {
            $usuario->setTipo('admin');
            $usuario->setFechaAlta('19-01-2018');
            
            $resultado = $this->getModel()->registrar($usuario);
        } 
        header('Location: index.php?ruta=index&op=registrar&res=' . $resultado);
        exit();
    }
    
    function login() {
        $usuario = new Usuario();
        $usuario->read();
        $r = -2;
        if(Filter::isEmail($usuario->getCorreo()) && ($usuario->getClave() !== '')) {
            $r = $this->getModel()->loguear($usuario);
            if($r instanceof Usuario) {
                $this->getSesion()->login($r);
                $r = 1;
            } else {
                $this->getSesion()->logout();
            }
        }
        header('Location: index.php?op=loguear&res=' . $r);
        exit();
    }
    
     function cerrarsesion() {
        $this->getSesion()->close();
        header('Location: index.php?op=logout');
        exit();
    }
    
    function administrador(){
         if($this->isAdministrator()) {
            $linea = '<tr>  
                        <td> {{nombre}} </td>
                        <td> {{apellidos}} </td>
                        <td> {{nombreUsuario}} </td>
                        <td> {{correo}} </td>
                        <td> {{clave}} </td>
                        <td> {{verificado}} </td>
                        <td> {{tipo}} </td>
                        <td> {{fechaalta}} </td>
                        <td> <a href="?ruta=index&accion=editarusuarioadministrador&id={{id}}">editar</a> </td>
                        <td> <a href="?ruta=index&accion=borrarusuario&id={{id}}">borrar</a> </td>
                    </tr>';
            $usuarios = $this->getModel()->getUsuarios();
            $todo = '';
            foreach($usuarios as $indice => $usuario) {
                $r = Util::renderText($linea, $usuario->getAttributesValues());
                $todo .= $r;
            }
            $this->getModel()->setDato('lineasUsuario', $todo);
        } else {
            $this->index();
        }
    }
    
    function borrarusuario(){
        if($this->isLogged() && $this->isAdministrator()){
            $this->getModel()->setDato('archivo', 'plantilla/delete.html');
            $this->getModel()->setDato('id', Request::read('id'));
             
        }
    }
    
    function deleteusuario(){               //Funcion que hace op (header)
        $id = Request::read('id');
        if($this->isAdministrator()){
            // con getModel hacemos la operaciones sobre la base de datos
            $usu = new Usuario();
            $usu -> setId($id);
            $r=$this->getModel()->borrarUsuario($usu);
        }
        // Redirige otra vez al index (no estamos renderizando una plantilla nueva, simplemente hacemos una operación)
        header('Location: index.php?accion=tablausuarios&op=borrar&res=' . $r);
        exit();
    }
    
      function editarusuario(){
        if($this->isLogged()){          //Funcion que edita plantillas
            $id=Request::read('id');
            $this->getModel()->setDato('archivo', 'plantilla/edit.html');
            $this->getModel()->setDato('id', $id);   //los datos estos serán los que se cambiaran x las llaves
            $usuario = $this->getModel()->obtenerUsuario($id);
            
            $this->getModel()->setDato('nombre', getNombre($usuario));
        }
    }
   
}