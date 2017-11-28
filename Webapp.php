<?php

//application/controllers

class Webapp extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('conversor_fechas');
        $this->load->helper('ayuda');
        $this->load->database();
        $this->load->model('Usuarios_model');
    }
    public function index(){
        $fecha = "2017-11-03";
        //echo "La fecha es ".fecha_mysql_a_espanol($fecha);
        $this->CargarVista('home');
    }
    public function CargarVista($view){
        $this->load->view('webapp/template/header');
        $this->load->view('webapp/'.$view);
        $this->load->view('webapp/template/footer');
    }
    public function prueba(){
        echo "HOLA ESTO ES EL METODO DE PRUEBA DEL CONTROLADOR WEBAPP";
        $fecha = "2017-11-07";
        $fecha_espanol = $this->conversor_fechas->fecha_mysql_a_espanol($fecha);
        echo "La fecha en español es $fecha_espanol<br>";
        $fecha_mysql = $this->conversor_fechas->fecha_espanol_a_mysql($fecha_espanol);
        echo "<br>La fecha en MYSQL es $fecha_mysql<br>";
    }
    //https://dominio/Controlador/metodo/arg1/arg2
    public function excel($tabla){
       $sql = $this->Usuarios_model->get($tabla);
       to_excel('fields',"listado_$tabla");
    }
}