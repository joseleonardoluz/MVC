<?php

  class NotaController{

    public function listar(){
        require_once 'models/Nota.php';  

        $nota = new Nota();        

        $notas = $nota->obtenerTodos('notas');

        require_once 'views/viewNota/listar.php';
    } 
    public function crear(){

    }

    public function borrar(){

    }
}  
?>