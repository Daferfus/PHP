<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'dbconfig.php';

include_once 'header.php';

if (isset($_GET['delete_id'])) {
    
    $id = $_GET['delete_id'];
    echo "La vaiable es ".$id;
    
    $crud->delete($id);
    echo "Registro borrado<br>";
    header("Location: index.php");
}