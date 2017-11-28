<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$fecha = date('d/m/Y');

echo $fecha;

$fecha2 = explode("/", $fecha);

//echo "...VISUALIZANDO ARRAY FECHA2 -----<br>";
//print_r($fecha2);

$dia = $fecha2[0];
$mes = $fecha2[1];
$anyo = $fecha2[2];

echo "El dia es [$dia] , el mes es [$mes] y el año es [$anyo]<br>";