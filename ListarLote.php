<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet">
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
    <img src="images/logomsf.png" height="100" width="200">
  </div>
  
  <h1><font color="red">Listado completo de los lotes</font></h1>
  <div id="contenido">
    <div style="text-align:center;">
      <table border="1" style="margin: 0 auto; width: 800px;">
      <thead>
        <th>Fecha de cracion del lote</th>
        <th>Descripcion del lote</th>
      </thead>
      
    <?php
      $servername = "localhost";
      $database = "moyseafood";
      $username = "root";
      $password = "";
  
      // Create connection
      $link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");

      $sentencia = "SELECT * FROM lote";

        $resultado=mysqli_query($link,$sentencia) or die ("Problemas al insertar".mysqli_error($con));
      while ($filas = $resultado->fetch_assoc()){ 

        echo "<tr>";
            echo "<td>"; echo $filas['fecha_creacion_lote']; echo "</td>";
            echo "<td>"; echo substr($filas['descripcion_lote'],0,20); echo "</td>";
        echo "</tr>";

      }
    ?>  
      
    </table>
    </div>
  </div>
  
  <div id="footer">
    <center>
      <img src="images/swirl2.png" height="500" width="2000">
    </center>
  </div>

  </div>


</body>
</html>