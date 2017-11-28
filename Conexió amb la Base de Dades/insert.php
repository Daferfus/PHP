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

//Crear un aconexio
$con=mysqli_connect($host,$user,$passwd,$bd);
//Comprovar conexio
    if (mysqli_connect_errno($con)){
        echo "Fallo al conectar a MySQL: ";
        mysqli_connect_error();
        exit();
    }
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$poblacion = $_POST['poblacion'];
$club = $_POST['club'];

$sql = "INSERT INTO participantes(Nombre,Apellidos,Poblacion,CLUB)
        VALUES('$nombre','$apellidos','$poblacion','$club') ";

if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
}
echo "1 registra dat de alta satisfactoriament";
mysqli_close($con);

header("Location: listar.php");