<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "Funcions.php";

if(isset($_POST['insertar']))
{
 $post_title = $_POST['titul'];
 $post_slug = $_POST['slug'];
 $post_abstract = $_POST['abstract'];
 $post_body = $_POST['cos'];
 $post_date = $_POST['fecha'];
 $post_visible = $_POST['visible'];
 $post_image = $_POST['imatge'];
 
 $funct = new Funcions(); 
    $dades_agafades = $funct->insertar($post_title,$post_slug,$post_abstract,$post_body,$post_date,$post_visible,$post_image); 
    header("Location: index.php");
}
?>

<html>
    <head></head>
    <body>
        <form method="post">
            Titol de la Noticia:<input type="text" name="titul" placeholder="Titul"/><br>
            Slug:<input type="text" name="slug" placeholder="Slug"/><br>
            Abstract:<input type="text" name="abstract" placeholder="Abstract"/><br>
            Cos:<input type="text" name="cos" placeholder="Cos"/><br>
            Fecha:<input type="text" name="fecha" placeholder="Fecha"/><br>
            Visible:<input type="text" name="visible" placeholder="Visible"/><br>
            Imatge:<input type="text" name="imatge" placeholder="Imatge"/><br>
            <button type="submit" name="insertar">Insertar</button>
        </form>
    </body>
</html>