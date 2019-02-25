<?php
 
   function autocarga($classname){
      include 'controller/'.$classname.'.php';    
   }

   spl_autoload_register('autocarga');

?>