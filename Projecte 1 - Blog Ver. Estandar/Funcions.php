<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Listar
 *
 * @author Michael Soft
 */

require_once "conexio.php"; 

class Funcions extends Conexio {
    //put your code here
 
    public function __construct(){ 
        parent::__construct(); 
    } 

    public function agafar_dades(){ 
        $result = $this->_db->query('SELECT * FROM gnr_post'); 
         
        $dades = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $dades; 
    }
    
    public function agafar_id(){ 
        $result = $this->_db->query('SELECT * FROM gnr_post WHERE post_id ='.$_GET['id']); 
         
        $dades = $result->fetch_array(MYSQLI_ASSOC); 
         
        return $dades; 
    }
    
    public function insertar($post_title,$post_slug,$post_abstract,$post_body,$post_date,$post_visible,$post_image){
        $result = $this->_db->query("INSERT gnr_post(post_title,post_slug,post_abstract,post_body,post_date,post_visible,post_image) VALUES('$post_title','$post_slug','$post_abstract','$post_body','$post_date','$post_visible','$post_image')");
        return $result;
    }
    
     public function editar($id,$post_title,$post_slug,$post_abstract,$post_body,$post_date,$post_visible,$post_image){
        $result = $this->_db->query("UPDATE gnr_post SET post_title='$post_title', post_slug='$post_slug', post_abstract='$post_abstract', post_body='$post_body', post_date='$post_date', post_visible='$post_visible', post_image='$post_image' WHERE post_id=".$id);
        return $result;
     }
 
    public function borrar($id){         
        $resu = $this->_db->query("DELETE FROM gnr_post WHERE post_id =".$id);
        return $resu;
    }
}
?> 