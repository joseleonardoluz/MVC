<h4>Todos los usuarios</h4>

<?php while($usuario = $all->fetch_object()):?>
   <?=$usuario->email?> - <?=$usuario->fecha?><br/>
<?php endwhile;?>



