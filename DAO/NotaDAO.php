<?php
require_once 'config/conexion.php';
   
class NotaDAO{
    
     private $cn;
     private $INSERT = "INSERT INTO notas VALUES()";
     private $UPDATE = "UPDATE notas SET nombre=?,  apellido=?, email=?, pass=?, fecha=? WHERE id=?";
     private $DELETE = "DELETE FROM notas WHERE id=?";
     private $SELECT = "SELECT * FROM notas"; 


     public function __construct(){
         $this->cn = conexion::conectar();
     }

     public function insertar(){

        
    }

    public function modificar(){

    }

    public function eliminar(){

    }

    public function todos(){
       $query  = $this->cn->query($this->SELECT);        
       return $query;
    }

    public function buscarXid(){

    }
}


?>