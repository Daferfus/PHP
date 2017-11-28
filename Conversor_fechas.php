<?php

//application/libraries

class Conversor_fechas {

    function fecha_mysql_a_espanol($fecha){
      $array_fecha = explode("-",$fecha);
      $fecha_espanol = $array_fecha[2].'/'.$array_fecha[1].'/'.$array_fecha[0];
      return $fecha_espanol;
    }

    function fecha_espanol_a_mysql($fecha){
        $array_fecha = explode("/",$fecha);
        $fecha_mysql = $array_fecha[2].'-'.$array_fecha[1].'-'.$array_fecha[0];
    }
}