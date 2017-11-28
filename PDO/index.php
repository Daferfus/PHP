<?php
// put your code here
include_once 'dbconfig.php';
include_once 'header.php';
?>

<div class="clearfix"></div>
<div class="container">
    <table class="table table-bordered table-responsive">
        <tr>
            <th>#</th>
            <th>Apellidos</th>
            <th>Nombre</th>
            <th>Poblacion</th>
            <th colespan="2" align="center">Acciones</th>
        </tr>
        <?php
        $query = "SELECT * FROM participantes ORDER BY Apellidos";
        $crud->dataview($query);
        ?>
    </table>
</div>
</div>
<?php
include_once 'footer.php';
?>