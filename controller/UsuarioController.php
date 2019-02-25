<?php


class UsuarioController{

    public function listar(){
        
        require_once 'DAO/UsuarioDAO.php';

        $usuario = new UsuarioDAO();
        $allUsers = $usuario->todos();        

        require_once 'views/Todos.php';
    }

    public function crear(){
         
        require_once 'views/crear.php';
    }
}
?>