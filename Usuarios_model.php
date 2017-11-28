<?php
//model

class Usuarios_model extends CI_Model{
    public function get($tabla){
        $fields = $this->db->field_data($tabla);
        //echo "<br> Campos: <br>";
        //print_r($fields);
        $query = $this->db->select('*')->get($tabla);
        //echo "<br> QUERY : <br>";
        //print_r($query);
        $sql = array(
            'fields' => $fields,
            'query' => $query
        );
        return $sql;


    }
}