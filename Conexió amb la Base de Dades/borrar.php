<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host = "localhost";
$user = "root";
$passwd = "Machete1@";
$bd = "carreras";

$id = $_GET['id'];

echo "Valor id = $id";

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

$sql = "DELETE FROM participantes WHERE IdParticipante = $id";

if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
}
echo "1 registra dat de alta satisfactoriament";
mysqli_close($con);

header("Location: listar.php");