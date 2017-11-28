<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadena
 *
 * @author fernandez163
 */
class Cadena {
    //put your code here

    public static function largo($cad){
        return srlen($cad);
    }
    public static function mayus($cad){
        return strtoupper($cad);
    }
    public static function minus($cad) {
        return strtolower($cad);
    }
}

$c = 'Hola esto es una prueba';
echo "<br>Longitud de c es ".Cadena::largo($c);
echo "<br>La cadena en minusculas es ".Cadena::minus($c);
echo "<br>La cadena en mayusculas ".Cadena::mayus($c);