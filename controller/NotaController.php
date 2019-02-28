<?php

  class NotaController{

    public function listar(){        

        require_once 'DAO/NotaDAO.php'; 

        $nota = new NotaDAO();   

        $notas = $nota->todos();

        require_once 'views/viewNota/listar.php';
    } 
    public function crear(){

    }

    public function borrar(){

    }
}  
?>