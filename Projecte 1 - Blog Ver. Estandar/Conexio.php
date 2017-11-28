<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author Michael Soft
 */

require_once "configuracio.php"; 

class Conexio {
    //put your code here
    protected $_db; 

    public function __construct(){ 
        $this->_db = new mysqli(host, user, passwd, bd); 

        if ( $this->_db->connect_errno ){ 
            echo "Error al conectar a MySQL: ". $this->_db->connect_error; 
            return;     
        } 

        $this->_db->set_charset(charset); 
    }
}