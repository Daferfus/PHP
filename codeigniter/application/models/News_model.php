<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news($slug = FALSE) {

        if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_news() {

        $titulo = $this->input->post('title');

        $texto = $this->input->post('text');

        $slug = url_title($titulo, 'dash', TRUE);


        //echo "Estamos en la funcion set_news($titulo,$slug,$texto)<br>";
        $data = array(
            'title' => $titulo,
            'slug' => $slug,
            'text' => $texto
        );
        return $this->db->insert('news', $data);
    }

}
