<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Trabajador
 *
 * @author fernandez163
 */
class Trabajador {
    //put your code here
    
    protected $nombre;
    protected $sueldo;
    
    public function __construct($nom, $sue){
        $this->nombre = $nom;
        $this->sueldo = $sue;
    }
    function getNombre() {
        return $this->nombre;
    }

    function getSueldo() {
        return $this->sueldo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }


}

class Empleado extends Trabajador{}
class Gerente extends Trabajador{}

$vec[]=new Empleado('juan', 1200);
$vec[]=new Empleado('ana', 1000);
$vec[]=new Empleado('carlos', 1000);
$vec[]=new Gerente('jorge', 25000);
$vec[]=new Gerente('marcos', 8000);

$sumaSueldoEmpleados = 0;
$sumaSueldoGerente = 0;

for ($i=0; $i < count($vec); $i++){
    print($vec[$i]);
    echo "<hr>";
    
    if ($vec[$i] instanceof Empleado)
        $sumaSueldoEmpleados = $vec[$i]->getSueldo () + $sumaSueldoEmpleados;
    else {
        $sumaSueldoGerentes = $vec[$i]->getSueldo () + $sumaSueldoGerentes;
     }
}
echo "LA SUMA TOTAL DE LOS SUELDOS DE GERENTE ES $sumaSueldoGerentes<br>";
echo "LA SUMA TOTAL DE LOS SUELDOS DE GERENTE ES $sumaSueldoEmpleados<br>";