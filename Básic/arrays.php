<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numeros = array(4,5,7,8,2);

echo "Antes de ordenar<br>";
print_r($numeros);

rsort($numeros);

echo "<br>Despues de ordenar <br>";
print_r($numeros);

$coches = array("volvo","BMW","toyota");

$total = count($coches);

echo "El total del array es $total <br>";

for ($i=0; $i < $total; $i++) {

    echo "El elemento posicion $i es ".$coches[$i];
    echo "<hr>";
}

//Arrays asociatius
$edades = array("pedro" => 35, "juan" => 25, "Andres" => 47);

echo $edades["pedro"];

$edades["manuel"] = 13;

arsort($edades);

echo "ORDENADO con ASORT<br>";

print_r($edades);



krsort($edades);

echo "PRINT_R DE EDADES <br>";

print_r($edades);

foreach ($edades as $key => $value) {
    echo "KEY = [$key] VALUE = [$value] <br>";
}