<?php   
    require_once "Funcions.php"; 

    if(isset($_GET['id']))
    {
    $funct = new Funcions(); 
    $dades_agafades = $funct->agafar_id();
    }
?> 

<!DOCTYPE html> 
 <html> 
 <head>
     <title>Blog</title>
 <style>
     body{background-color: greenyellow};
     td{background-color: red};
 </style>
 </head>
 <body>
     <h1><?php echo $dades_agafades['post_title'] ?></h1>
     <br>
     <?php echo $dades_agafades['post_body'] ?>
 </body>
 </html> 