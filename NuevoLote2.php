<?php

	NuevoProducto($_POST['nomb_lote']);

	function NuevoProducto($nomb_lote)
	{
		// Create connection
		$servername = "localhost";
		$database = "moyseafood";
		$username = "root";
		$password = "";
	
		
		$link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");
		
		$fechactual = date("Y") ."-" . date("m") . "-"  . date("d"); //Calculo de nuevo la fecha actual para insertarla en la tabla lote
		
		$sent_insert="INSERT INTO lote (descripcion_lote, fecha_creacion_lote) VALUES ('".$nomb_lote."', '".$fechactual."')";
		$resultado=mysqli_query($link,$sent_insert);
			
			?>
				<script type="text/javascript">
				alert("Articulo ingresado exitosamente");
				window.location.href='index.html';
				</script>
			<?php	
		}
	?>