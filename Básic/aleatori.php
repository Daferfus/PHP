<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$valor=rand(1,100);

echo $valor."<br>";

echo "<hr>";

if ($valor < 9) {
    echo "El numero tiene 1 cifra";
}
else if ($valor < 100 ) {
    echo "El numero tiene 2 cifras";
}
else {
    echo "El numero tiene 3 cifras";
}

for ($numero = 1 ; $numero < 100 ; $numero++){
    echo $numero;
    echo "<br>";
}
$numero = 1;
while ($numero < 100) {
    echo $numero++;
    echo "<br>";
}