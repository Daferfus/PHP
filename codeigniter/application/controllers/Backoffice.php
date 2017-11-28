<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Backoffice extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->library('grocery_CRUD');
        $this->load->library('session');
        $this->load->library('encryption');
    }

    public function encriptar() {
        $plain_text = 'This is a plain-text message!';
        $ciphertext = $this->encryption->encrypt($plain_text);
        echo "Texto Cifrado :[$ciphertext]<br>";
        echo "Tamaño Clave Cifrada .".strlen($ciphertext)."<br>";
// Outputs: This is a plain-text message!
        echo $this->encryption->decrypt($ciphertext);
    }

    public function index() {
        //echo "CONTROLLER BACKOFFICE METODO INDEX";
        $this->load->view('backoffice/sign-in');
    }

    public function validate_user() {

        $user = $this->input->post('username');
        $passwd = $this->input->post('password');  //Passwd del Formulario
        $sql = "SELECT * FROM users WHERE user_login = ? ";
        $query = $this->db->query($sql, array($user));
        $row = $query->row();

        if (isset($row)) {
            $user_name = $row->user_name;
            $user_passwd = $row->user_passwd; //Passwd de la BD
            $user_rol = $row->user_rol;
            if ($passwd == $user_passwd) {
                echo "Autentificacion OK";
                //Entonces grabamos variables de Sesion
                $variables_session = array(
                    'username' => $user_name,
                    'email' => $user,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($variables_session);
                //Fin de la grabacion de las variables de session
                //Recuperar variables de sesion
                // $email = $this->session->email
            } else
                echo "Passwd Incorrecto";
        } else
            echo "Usuario Incorrecto";
    }

    public function users() {

        $crud = new Grocery_CRUD();
        $crud->set_table('users');
        $crud->set_subject('Usuario');

        $crud->field_type('user_passwd', 'password');
        $datos = $crud->render();
        $this->Cargar_Vista($datos);
    }

    private function Cargar_Vista($datos) {
        $this->load->view('backoffice/panel', $datos);
    }

    public function logout() {
        $variables_session = array(
            'username',
            'email',
            'logged_in');
        $this->session->unset_userdata($variables_session);
        session_destroy();

        redirect('backoffice');
    }

}
