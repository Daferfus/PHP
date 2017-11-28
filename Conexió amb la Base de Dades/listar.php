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
        <a href = "insertar.php">Insertar Participante</a>

        <form action="" method="POST">
            Buscar Participante por Poblacion
            <input type="text" name="poblacion" value="" />
            <input type="submit" value="Buscar" name="Buscar"/>
        </form

        <br>
        <hr>
        
        <?php

        $where = "";
        $order = "";
        $limit = "";
        
        $campo_a_ordenar = $_GET['order'];
        
        echo "Ordenado por [$campo_a_ordenar]";
        
        if(empty($campo_a_ordenar))
            $order = " ORDER BY Apellidos";
        else
            $order = " ORDER BY $campo_a_ordenar";
        
        if ($_POST['Buscar']){
            
            $poblacin = $_POST['poblacion'];
            $where = "WHERE Poblacion LIKE '%$poblacion%' ";
            
            echo "Listado de inscritos en $poblacion<br>";
        }
        $host = "localhost";
        $user = "root";
        $passwd = "Machete1@";
        $bd = "carreras";

        //Crear un aconexio
        $con=mysqli_connect($host,$user,$passwd,$bd);
        //Comprovar conexio
        if (mysqli_connect_errno($con)){
            echo "Fallo al conectar a MySQL: ";
            mysqli_connect_error();
            exit();
        }
        //echo "Conexio OK";
        $sql = "SELECT * FROM participantes $where $order";
        $result = mysqli_query($con,$sql);
        
        //Paginacion
        
        //Limito la busqueda
        $TAMANO_PAGINA = 5;
        //examino la pagina a mostrar y el inicio del registro a mostrar
        $pagina =  $_GET["pagina"];
        if(!pagina){
            $inicio = 0;
            $pagina = 1;
        } else{
            $inicio = ($pagina - 1) * $TAMANO_PAGINA;
        }
        
        $num_total_registros = mysqli_num_rows($result);
        echo "Total Registros:".$num_total_registros."<br>";
        //calculo el total de paginas
        $total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);
        echo "paginas:[$total_paginas]";
        $limit = " LIMIT $inicio , $TAMANO_PAGINA";
        echo $limit;
        
        //Fin paginacion
        
        $sql = "SELECT * FROM participantes $where $order $limit";
        
        echo "<h2>$sql</h2>";
        
        echo "<table border='1'>";
        echo "<tr><td></td><td></td>
              <td><a href='listar.php?order=Apellidos'>Apellidos</a></td>
              <td><a href='listar.php?order=Nombre'>Nombre</a></td>
              <td><a href='listar.php?order=Poblacion'>Poblacion</a></td>
              <td><a href='listar.php?order=CLUB'>Club</a></td></tr>";
        //print_r($result);
        while($fila = mysqli_fetch_array($result)){
            echo "<tr><td><a href='borrar.php?id=".$fila['IdParticipante']."'>Borrar</a></td>
                      <td><a href='editar.php?id=".$fila['IdParticipante']."'>Editar</a></td>
                      <td>".$fila['Apellidos']."</td>
                      <td>".$fila['Nombre']."</td>
                      <td>".$fila['Poblacion']."</td>
                      <td>".$fila['CLUB']."</td></tr>";
}
        echo "</table>";
        
        for ($pagina = 1 ; $pagina < $total_paginas ; $pagina++){
            echo "<a href='listar.php?pagina=$pagina' >$pagina</a>,";
        }
        //print_r($fila);

        //Cerramos conexion
        mysqli_close($con);

?>
    </body>
</html>
