<?php

	NuevoProducto($_POST['des_tipo'],$_POST['familia']);

	function NuevoProducto($des_tipo,$familia)
	{

		// Create connection
		$servername = "localhost";
		$database = "moyseafood";
		$username = "root";
		$password = "";
	
		
		$link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");
		
		
		$sent_insert="INSERT INTO tipo (descripcion_tipo, familia_id_t) VALUES ('".$des_tipo."', '".$familia."')";
		$resultado=mysqli_query($link,$sent_insert);
			//Mensaje de creacción exitosa del articulo en la BD
			?>
				<script type="text/javascript">
				alert("Articulo ingresado exitosamente");
				window.location.href='index.html';
				</script>
			<?php	
		}
	?>