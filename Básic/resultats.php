<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$extras = $_POST['extras'];

//print_r($extras);

echo "Los valores seleccionados son :<br>";

foreach ($extras as $extra) {
    echo $extra."<br>";
}

$color = $_POST['color'];
echo "<br>El color seleccionado es : $color <br>";

$idiomas = $_POST['idiomas'];

echo "Las lenguas seleccionadas son:<br>";

foreach ($idiomas as $idioma)
    echo $idioma."<br>";

$comentario = $_POST['comentario'];

echo "<br>El comentario es:".$comentario;

print_r($idiomas);

$nombre = $_FILES['putjar fitxer']['name'];
$tipo = $_FILES['putjar fitxer']['type'];
$tamaño = $_FILES['putjar fitxer']['size'];
$nomTemp = $_FILES['putjar fitxer']['tmp_name'];
$error = $_FILES['putjar fitxer']['error'];

echo "<br>El nombre del fichero es $nombre<br>";
echo "<br>El tipo del fichero es $tipo<br>";
echo "<br>El tamaño del fichero es $tamaño<br>";
echo "<br>El nombre temporal del fichero es $nomTemp<br>";
echo "<br>El error en la subida del fichero es $error<br>";

//Comprobar si se ha subido el fichero temporal al servidor

if (is_uploaded_file($nomTemp)){
    echo "Fichero Temporal OK";
    $carpeta = "archivos/";
    $nombre_fichero = $carpeta.$nombre;
    move_uploaded_file($nomTemp, $nombre_fichero);
}else{
    echo "Error en la subida del FICHERO : [$error]";
}