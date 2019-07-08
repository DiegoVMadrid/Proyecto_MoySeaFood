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
  		<span> <h1><font color="red">Alta nuevo lote</font></h1> </span>
  		<br>
	  <form action="NuevoLote2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

      <!-- Caja donde se inserta el lote -->
      <div>
        <h2>Inserta la descripcion del lote: 
  		    <input type="text" id="nomb_lote" name="nomb_lote" maxlength="10" size="15"></h2><br>
  		</div>
  		
      <div>
      <h2>Fecha de lote: 
       <?php
        $fechactual = date("Y") ."/" . date("m") . "/"  . date("d");
        echo $fechactual;
      ?> 

      </h2><br>
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