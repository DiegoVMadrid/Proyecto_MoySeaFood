<?php

 	//echo $_GET['id'];
 	

 	$servername = "localhost";
    $database = "moyseafood";
    $username = "root";
    $password = "";
	
		// Create connection
		$link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");

  		$sentenciatipo="SELECT * FROM tipo WHERE familia_id_t = '".$_GET['id']."'"; //Muestro en una nueva pantalla a traves del enlace los tipos relacionados a la familia con la columna del id de la familia

  		$restipo=mysqli_query($link,$sentenciatipo) or die (mysqli_error());

  		while ($filas = $restipo->fetch_assoc()){ 

        echo $filas['descripcion_tipo'];
        echo "<br>";

      }

?>