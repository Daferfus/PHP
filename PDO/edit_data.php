<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'dbconfig.php';

include_once 'header.php';

if (isset($_POST['btn-update'])){
    //echo "Has pulsado el boton Actualizar";
    $id = $_GET('edit_id');
    $apelldos = $_POST['apellidos'];
    $nombre = $_POST['nombre'];
    $poblacion = $_POST['poblacion'];
    
    //echo "LOS campos son [$apellidos] [$nombre] [$poblacion]<br>";
    
    if ($crud-update($id, $apellidos, $nombre, $poblacion)){
     
        $msg = "<div class='alert alert-info'>
                Registro fue actualizado con exito
                <a href='index.php'>HOME</a>
                </div>";
    
        
    }else{
        
        $msg = "<div class='alert alert-warning'>
                ERROR Actualizando Registro
                </div>";
    }
    
}
if (isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    
   
    
    //echo "ID=[$id]";
    extract($crud->getID($id));
    
    //echo "Apellidos[$Apellidos] Nombre[$Nombre] Poblacion[$Poblacion] <br>";
}

?>
<div class="clearfix"</div><br>
<div class="container" >
    <?php
    echo $msg;
    if (isset($msg)){
        echo $msg;
        
    }
    ?>
    <form method="post" >
        <table class="table table-bordered" >
            <tr>
                <td>Apellidos</td>
                <td><input type="text" name="apellidos" class="form-control" value="<?php echo $Apellidos; ?>" /></td>
            </tr>
            
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" class="form-control" value="<?php echo $Nombre; ?>" /></td>
            </tr>
            
            <tr>
                <td>Poblacion</td>
                <td><input type="text" name="poblacion" class="form-control" value="<?php echo $Poblacion; ?>" /></td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <button type="submit" value="btn-update" name="btn-update" class="btn btn-primary" />
                    
                    <span class="glyphicon glyphicon-edit"> </span>
                    
                    Actualizar Registro
                    </button>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
include_once 'footer.php';