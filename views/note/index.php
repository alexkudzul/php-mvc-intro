<h1>Listado de notas</h1>

<!-- Por cada iteracion que se haga en $notas, se guarda en $nota -->
<?php while($note = $notes->fetch_object()):?>

<?=$note->title?> - <?=$note->date?> <br>

<?php endwhile; ?>