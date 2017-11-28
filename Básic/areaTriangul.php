<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'funcions.php';

$a = 5;
$b = 3;

$area = areaTriangul($b, $a);

echo "El area es $area";

incrementaNombre($b);

echo "El valor de b es $b <br>";

mostranom("Profesor");

$mitja = promig($a, $b);

echo "Mitja aritmetica:".$mitja;

$a=3;

cuadratcub($a, $cuadrat, $cub);

echo "El cuadrado es $cuadrat y el cubo es $cub";