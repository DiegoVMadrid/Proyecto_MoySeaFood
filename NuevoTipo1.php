<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interaccion con DB</title>
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
  		<span> <h1><font color="red">Alta del nuevo tipo</font></h1></span>
  		<br>
	  <form action="NuevoTipo2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

      <!-- Caja donde se inserta el nombre de la nueva familia -->
      <div>
        <h2>Descripcion del nuevo tipo: 
  		    <input type="text" id="des_tipo" name="des_tipo"></h2><br>
  		</div>
  		
      <!-- Combobox donde se selecciona el lote del articulo -->
      <div>
      <h2>Lote</h2>
      <select name="familia">
        <option value="0">Seleccione</option>
        <?php 
          // Create connection
          $servername = "localhost";
          $database = "moyseafood";
          $username = "root";
          $password = "";
  
          $link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");

          $sentenciatipo = "SELECT * FROM familia";
          $restipo=mysqli_query($link,$sentenciatipo) or die (mysqli_error());
          while ($fila = $restipo->fetch_assoc()){
            echo "<option value='".$fila['id_familia']."'>".$fila['nomb_familia']."</option>";
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