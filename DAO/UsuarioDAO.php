<?php
require_once 'config/conexion.php';

 class UsuarioDAO{
      
     private $cn;
     private $INSERT = "INSERT INTO usuarios VALUES(null, 'nombre', 'apellidos', email, 'pass', CURDATE())";
     private $UPDATE = "UPDATE usuarios SET nombre=?,  apellido=?, email=?, pass=?, fecha=? WHERE id=?";
     private $DELETE = "DELETE FROM usuarios WHERE id=?";
     private $SELECT = "SELECT * FROM usuarios"; 


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