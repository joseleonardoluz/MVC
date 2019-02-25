<?php


class UsuarioController{

    public function listar(){
        
        require_once 'models/Usuario.php';

        $usuario = new Usuario();
        $allUsers = $usuario->conseguirTodos('usuarios');        

        require_once 'views/Todos.php';
    }

    public function crear(){
         
        require_once 'views/crear.php';
    }
}
?>