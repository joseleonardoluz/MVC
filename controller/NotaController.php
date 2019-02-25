<?php

  class NotaController{

    public function listar(){
        require_once 'models/Nota.php';  

        $nota = new Nota();
        $nota->setNombre('Titulo de la nota');
        $nota->setContenido('Este es el body o contenido de la nota');

        require_once 'views/viewNota/listar.php';
    } 
    public function crear(){

    }

    public function borrar(){

    }
}  
?>