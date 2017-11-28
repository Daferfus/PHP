<?php $fecha = "2017-11-03";?>
<?=fecha_mysql_a_espanol($fecha)?>
<?php $usuarios = get_users(); ?>

<table border="1">
<?php foreach ($usuarios as $usuario){
    echo "<tr><td>".$usuario->user_login."</td>";
    echo "<td>".$usuario->user_name."</td>";
}

    ?>