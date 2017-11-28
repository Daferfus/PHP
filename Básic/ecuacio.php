<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'funcions.php';

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$num_soluciones = calcularEc2grado($a, $b, $c, $sol1, $sol2);

echo "NUMERO SOLUCIONES = ".$num_soluciones;

if ($num_soluciones == 1){
    echo "SOLUCION =".$soll."<br";
}
else if($num_soluciones == 0){
    echo "No existe Soluciones<br>";
}
else{
    echo "2 solciones [$sol1] y [$sol2]<br>";
}

