
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta nuevo articulo</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<script src="functions.js"></script>
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/logomsf.png" height="100" width="200">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1><font color="red">Alta del nuevo articulo</font></h1> </span>
  		<br>
	  <form action="NuevoArticulo2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

      <!-- Caja donde se inserta el numero de serie del articulo -->
      <div>
        <h2>Numero de serie del articulo: 
  		    <input type="text" id="num_serie" name="num_serie"></h2><br>
  		</div>
    
      <!-- Caja donde se inserta la descripcion del articulo -->
      <div>
        <h2>Descripcion: 
          <input type="text" id="des_articulo" name="des_articulo"></h2><br>
      </div>


      <!-- Combobox donde se selecciona la familia -->
      <div>
        <h2>Familias</h2>
        <select name="familias" id="familias">
          <option value="0">Seleccione</option>
        </select>
      </div>

      <!-- Combobox donde se selecciono el tipo respecto a la familia que tiene asociado -->
      <div>
        <h2>Tipos</h2>
        <select name="tipos" id="tipos">
          <option value="0">Seleccione</option>
        </select>
      </div>

     
      <?php
        // Create connection
        $servername = "localhost";
        $database = "moyseafood";
        $username = "root";
        $password = "";
  
        $link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");

      ?>  

    <!-- Combobox donde se selecciona el lote del articulo -->
    <div>
      <h2>Lote</h2>
      <select name="lote">
        <option value="0">Seleccione</option>
        <?php 
          $sentencialote = "SELECT * FROM lote";
          $reslote=mysqli_query($link,$sentencialote) or die (mysqli_error());
          while ($fila = $reslote->fetch_assoc()){
            echo "<option value='".$fila['id_lote']."'>".$fila['fecha_creacion_lote']." -> ".$fila['descripcion_lote']."</option>";
          }
        ?>
      </select><br>
    </div>
    <br>
  	   <button type="submit" class="btn btn-success">Guardar</button>
     </form>
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
