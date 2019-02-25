<?php
   
   class conexion{
       
    public static function conectar(){

        $conexion = new mysqli("localhost", "root", "123456", "notas_master");
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }

   }


?>