<?php
require_once 'config/conexion.php';

 class UsuarioDAO{
      
    public $cn;
    public $INSERT = "INSERT * FROM usuarios ORDER BY id DESC";
    public $UPDATE = "UPDATE usuarios SET nombre=?,  apellido=?, email=?, pass=?, fecha=? WHERE id=?";
    public $DELETE = "DELETE FROM usuarios WHERE id=?";
    public $SELECT = "SELECT * FROM usuarios"; 


     public function __construct(){
         $this->$cn = conexion::conectar();
     }

     public function insertar(){

        
     }

     public function modificar(){

     }

     public function eliminar(){

     }

     public function todos(){
        $query  = $this->cn->query($SELECT);        
        return $query;
     }

     public function buscarXid(){

     }

 }

?>