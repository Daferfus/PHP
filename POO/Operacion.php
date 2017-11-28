<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Operacion
 *
 * @author fernandez163
 */
class Operacion {
    //put your code here
    protected $valor1;
    protected $valor2;
    protected $resultado;
    public function __construct($v1,$v2){
        $this->valor1=$v1;
        $this->valor2=$v2;
    }
    public function imprimir_resultado(){
        echo $this->resultado."<br>";
    }
}

class Suma extends Operacion{
    public function operar(){
        $this->resultado = $this->valor1 + $this->valor2;
    }
}

class Resta extends Operacion{
    
    protected $titulo;
    public function __construct($v1, $v2, $tit) {
        parent::__construct($v1, $v2);
        $this->titulo = $tit;
    }
    public function operar(){
        $this->resultado = $this->valor1 - $this->valor2;
    }
    public function imprimir_resultado(){
        echo $this->titulo;
        echo "La suma de $this->valor1 y $this->valor2 es";
        parent::imprimir_resultado();
    }
}

$suma = new Suma(10, 5, "<h1>Operacion Suma</h1>");
$suma->operar();
$suma->imprimir_resultado();

$resta = new Resta(10, 5);
$resta->operar();
$resta->imrpimir_resultad();
