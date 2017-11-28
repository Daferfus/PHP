<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CabezeraPagina
 *
 * @author fernandez163
 */
class CabeceraPagina {
    //put your code here
    private $titulo;
    private $ubicacion;
    public function inicializar($tit, $ubi){
        $this->titulo=$tit;
        $this->ubicacion=$ubi;
    }
    public function dibujar(){
        echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
        echo $this->titulo;
        echo '</div>';
    }
}

$cabecera1=new CabeceraPagina();
$cabecera1->inicializar('El blog del programador', 'center');
$cabecera1->dibujar();

$cabecera2=new CabeceraPagina();
$cabecera2->inicializar('El blog del programador', 'left');
$cabecera2->dibujar();

