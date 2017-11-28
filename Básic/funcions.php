<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function areaTriangul($base,$altura) {
    
    $area = ($base*$altura)/2;
    
    return $area;
}

function incrementaNombre(&$numero){
    $numero++;
    
}

function mostranom($titulo = "Sr.") {
    echo "Estimado $titulo: <br>";
}

function promig($nombre1, $nombre2) {
    $promig = ($nombre1 + $nombre2)/2;
    
    return $promig;
}

function cuadratcub($valor,&$cuadrat,&$cub) {
    $cuadrat = $num*$num;
    $cub = $num*$num*$num;
}

function calcularEc2grado($a,$b,$c,$sol1,$sol2){
    
    $disc = $b*$b-(4*$a*$c);
    
    if ($disc < 0){
        //No existe solucion
        return 0;
        
    }else if ($disc == 0){
        //unica solucion
        $sol1 = -$b/(2*$a);
        return 1;
    }else{
        //Dos solucions
        $sol1 = (-$b + sqrt($disc))/(2*$a);
        $sol2 = (-$b - sqrt($disc))/(2*$a);
        return 2;
    }
    
    
    
}