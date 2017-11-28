<html>
    <head></head>
    <body>
        
        <form action="numero.php" method="POST">
              Numero :<input type="text" name="numero" value="" />
              <input type="submit" value="Aceptar" />
        </form>
        <?php
        echo "HOLA MUNDO";
        
        $numero = 13; //numero
        $nombre = "Juanjo"; //string
        $importe = 1521.23; //decimal
        $resultado = true; //booleano
        
        echo "El numero es $numero y el nombre $nombre<br>";
        echo 'El numero es $numero y el nombre $nombre<br>';
        ?>
        
    </body>
</html>
