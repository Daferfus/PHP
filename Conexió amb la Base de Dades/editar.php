<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET['id'];

echo "Valor id = $id";

$host = "localhost";
$user = "root";
$passwd = "Machete1@";
$bd = "carreras";

//Crear una conexio
$con=mysqli_connect($host,$user,$passwd,$bd);
//Comprovar conexio
    if (mysqli_connect_errno($con)){
        echo "Fallo al conectar a MySQL: ";
        mysqli_connect_error();
        exit();
    }
//echo "Conexio OK";

mysqli_set_charset($con, 'utf8');

if ($_POST['actualizar']){
    //echo "HAS PULSADO EL BOTON ACTUALIZAR";
    //echo "Aqui pondriamos el codigo del UPDATE";
    
    $nombre_post = $_POST['nombre'];
    $apellidos_post = $_POST['apellidos'];
    $club_post = $_POST['club'];
    $poblacion_post = $_POST['poblacion'];
    
    $update = "Update participantes SET Nombre = '$nombre_post',
               Apellidos = '$apellidos_post', CLUB = '$club_post',
               Poblacion = '$poblacion_post'
               WHERE IdParticipante = $id ";
    
    echo $update;
    
    if (!mysqli_query($con,$update)){
    die('Error: ' . mysqli_error($con));
    }
    echo "Regristro modificado satisfactoriamente";
    mysqli_close($con);

    header("Location: listar.php");

}else {

$sql = "SELECT * FROM participantes WHERE IdParticipante = $id ";

$result = mysqli_query($con, $sql);

$fila = mysqli_fetch_array($result);

$nombre = $fila['Nombre'];
$apellidos = $fila['Apellidos'];
$club = $fila['CLUB'];
$poblacion = $fila['Poblacion'];

//echo "<br>$nombre , $apellidos,$poblacion , $club";
?>
<html>
    <head></head>
    <body>
        <form method="POST">
            Nombre:<input type="text" name="nombre" value="<?php echo $nombre ?>" /><br>
            Apellidos:<input type="text" name="apellidos" value="<?php echo $apellidos ?>" /><br>
            Poblacion:<input type="text" name="poblacion" value="<?php echo $poblacion ?>" /><br>
            Club:<input type="text" name="club" value="<?php echo $club ?>" /><br>
            <input type="submit" value="Actualizar" name="actualizar"/>
        </form>
    </body>
</html>
<?php
}
mysqli_close($con);

header("Location: listar.php");