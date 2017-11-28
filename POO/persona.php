<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author fernandez163
 */
class persona {
    //put your code here
    private $nombre; //Atributo private , public o protected
    
    function inicializar($nom){
        $this->nombre = $nom;
    }
    function imprimir(){
        echo "Hola , tu nombre es ".$this->nombre;
        echo "<hr>";
    }
    
}
//Vamos a utilizar la clase
$persona1 = new persona();
$persona1->inicializar("PEPE");
$persona1->imprimir();

$persona2 = new persona();
$persona2->inicializar("JUAN");
$persona2->imprimir();