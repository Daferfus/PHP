<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "Funcions.php";

if(isset($_GET['id']))
{
 $id=$_GET['id'];
 $funct = new Funcions(); 
    $dades_agafades = $funct->borrar($id);
    header("Location: index.php");
}