<?php   
    require_once "Funcions.php"; 

    $funct = new Funcions(); 
    $dades_agafades = $funct->agafar_dades(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head>
     <title>Blog</h1</title>
 <style>
     body{background-color: greenyellow};
     td{background-color: red};
 </style>
 </head>
 <body>
     <h1>Blog de Noticies</h1>
     <h2><a href = "insertar.php">Insertar</a></h2>
     <table border="1"> 
            <?php foreach ($dades_agafades as $row): ?> 
            <tr> 
                <td><a href = "noticia.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['post_title']?></td> 
                <td><img src="./images/blog/<?php echo $row['post_image']; ?>" height="150" width="250"></td>
                <td><a href = "editar.php?id=<?php echo $row['post_id']; ?>">Editar</a></td>
                <td><a href = "borrar.php?id=<?php echo $row['post_id']; ?>">Borrar</a></td>
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table>   
 </body> 
 </html> 