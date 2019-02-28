<?php

require_once 'config/conexion.php';

class ModeloBase{    
    public $db;

    public function __construct(){
        $this->db = conexion::conectar();
    }
    
    public function obtenerTodos($tabla){
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }
}

?>