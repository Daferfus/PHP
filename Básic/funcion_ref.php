<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$array = ['perro','gato','avestruz'];

function mostrarAnimales($animales){
    foreach ($animales as $animal){
        echo $animal;
        echo "<br>";
    }
    $animales = ['mono','gorila','cebra'];
}

function verPelicula($titulo="Avatar", $genero=NULL){
    return "Vamos a ver la pelicula $titulo cuyo genero es $genero <br>";
}

function cuadradocubo ($valor,&$cuad,&$cub){
    $cuad = $valor*$valor;
    $cub = $valor*$valor*$valor;
}
mostrarAnimales($array);
echo verPelicula();
echo verPelicula("Lo que el Viento se Llevo","drama");
$cuad = 26000;
$cub = 0;
$numero = 3;
cuadradocubo($numero, $cuad, $cub);
echo "El cuadrado de $numero es $cuad y el cubo es $cub <br>";

$medidas = arrat (10, 25, 15);

$lon = count($medidas);

for ($i=0; $i < $lon; $i++){
    echo $medidas[$i]."<br>";
}

foreach ($medidas as $medida){
    echo $medida."<br>";
}

$datos = array(
  'nombre' => 'pepe',
  'apellidos' => 'gomez',
  'poblacion' => 'gandia',
);

foreach($datos as $campo => $valor) {
  echo "CLAVE[$clave] => VALOR[$valor]<br>";  
}

echo "<hr>";
$hoy = date('d/m/Y h:i:s');
echo "La fecha de hoy es <br>";
echo $hoy;

$fecha_hora=explode(" ",$hoy);

$fecha = $fecha_hora[0];
$hora = $fecha_hora[1];

echo "La fecha es [$fecha] y la hora es [$hora] <br>";

$fecha_array = explode("/", $fecha);

$dia = $fecha_array[0];
$mes = $fecha_array[1];
$anyo = $fecha_array[2];

echo "Dia[$dia] mes[$mes] Anyo[$anyo] <br>";

$hora_array = explode(":",$hora);

$horas = $hora_array[0];
$minutos = $hora_array[1];
$segundos = $hora_array[2];

echo "$horas, $minutos, $segundos ";