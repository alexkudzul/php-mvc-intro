<h1>Listado de Usuarios</h1>

<?php while($user = $users->fetch_object()):?>

    <?=$user->email?> - <?=$user->date?>
<?php endwhile;?>
