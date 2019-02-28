<h3>Todas las notas</h3>

<?php while($nota = $notas->fetch_object()):?>

   <?=$nota->titulo?> - <?=$nota->contenido?> - <?=$nota->fecha?><br/>
<?php endwhile;?>