<?php   
    require_once "Funcions.php"; 
    
    if(isset($_GET['id']))
    {
         $funct = new Funcions();
         $dades_agafades = $funct->agafar_id();
    }

    if(isset($_POST['actualitzar']))
    {
        $post_title = $_POST['post_title'];
        $post_slug = $_POST['post_slug'];
        $post_abstract = $_POST['post_abstract'];
        $post_body = $_POST['post_body'];
        $post_date = $_POST['post_date'];
        $post_visible = $_POST['post_visible'];
        $post_image = $_POST['post_image'];
 
        $id=$_GET['id'];
 
        $funct = new Funcions(); 
        $result = $funct->editar($id,$post_title,$post_slug,$post_abstract,$post_body,$post_date,$post_visible,$post_image);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            Titol de la Noticia:<input type="text" name="post_title" value="<?php echo $dades_agafades['post_title']; ?>"/><br>
            Slug:<input type="text" name="post_slug" value="<?php echo $dades_agafades['post_slug']; ?>"/><br>
            Abstract:<input type="text" name="post_abstract" value="<?php echo $dades_agafades['post_abstract']; ?>"/><br>
            Cos de la Noticia:<textarea rows="100" cols="150" name="post_image">
                                <?php echo $dades_agafades['post_body']; ?>"
                              </textarea><br>
            Fecha:<input type="text" name="post_date" value="<?php echo $dades_agafades['post_date']; ?>"/><br>
            Visible:<input type="text" name="post_visible" value="<?php echo $dades_agafades['post_visible']; ?>"/><br>
            Imatge:<input type="text" name="post_image" value="<?php echo $dades_agafades['post_image']; ?>"/><br>
            <input type="submit" value="Actualitzar" name="actualitzar"/>
        </form>
    </body>
</html>