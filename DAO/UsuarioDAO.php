<?php
require_once 'config/conexion.php';

 class UsuarioDAO{
      
     private $conexion;
     private $INSERT = "SELECT * FROM usuarios ORDER BY id DESC";
     private $UPDATE = "UPDATE usuarios SET nombre=?,  apellido=?, email=?, pass=?, fecha=? WHERE id=?";
     private $DELETE = "DELETE FROM usuarios WHERE id=?";
     private $SELECT = "SELECT * FROM usuarios"; 


     public function __construct(){
         $this->conexion::conectar();
     }

     public function insertar(){

        
     }

     public function modificar(){

     }

     public function eliminar(){

     }

     public function todos(){
        $query  = $this->conexion->query($SELECT);        
        return $query;
     }

     public function buscarXid(){

     }

 }

?>