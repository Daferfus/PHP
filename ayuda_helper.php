<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//application/helpers

if (!function_exist('fecha_mysql_a_espanol')){
    function fecha_mysql_a_espanol($fecha){
        $array_fecha = explode("-",$fecha);
        $fecha_espanol = $array_fecha[2].'/'.$array_fecha[1].'/'.$array_fecha[0];
        return $fecha_espanol;
    }

}

if (!function_exist('get_users')){
    function get_users(){
        // $ci sera como $this
        $ci = & get_instance();

        $query = $ci->db->get('users');

        return $query->result();
    }
}

if (!function_exists('to_excel')){
    function to_excel($sql, $filename= 'exceloutput'){
        $headers="";
        $data="";
        $obj = & get_instance();
        $query = $sql["query"];
        $fields = $sql["fields"];

        foreach ($fields as $field){
            $headers .=$field->name."\t";
        }

        echo $headers;
        echo "\n";

        if ($query->num_rows()==0){
            echo '<p>La tabla no tiene datos </p>';
        }
        else{
            foreach ($query->result() as $row){
                //print_r($row);
                foreach($row as $clave => $valor) {
                    //echo "<p>$clave => $valor</p>";
                    $data .=$valor."\t";
                }
                //echo "<br>";
                $data .="\n"; 
            }
        }

        header("Content-type: application/x-msdownload");
        header("Content-Disposition: attachment;filename=$filename.xls");
        echo mb_convert_enconding("$headers\n$data",'utf-8');

    }
}