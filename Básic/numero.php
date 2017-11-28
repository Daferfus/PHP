<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero = $_POST['numero'];

echo "El valor del numero es $numero ";

if($numero % 2 == 0)
    echo "<br>El numero es par";
else
    echo "<br>El numero es impar";

for ($i = 1; $i<=10; $i++){
    echo "·numero x $i= ".($numero*$i);
    echo "<br>";
}