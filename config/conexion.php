<?php
   
   class conexion{
       
    public static function conectar(){

        $conexion = new mysqli("192.168.10.10", "homestead", "secret", "mvcDB");
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }

   }


?>