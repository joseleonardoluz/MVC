<?php


class UsuarioController{

    public function listar(){
        
        require_once 'models/usuario.php';

        $usuario = new Usuario();
        $all = $usuario->obtenerTodos('usuarios');        
        // var_dump($all);
        // die();
        require_once 'views/Todos.php';
    }

    public function crear(){
         
        require_once 'views/crear.php';
    }
}
?>