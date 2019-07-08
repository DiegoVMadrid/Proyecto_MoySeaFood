<?php

	NuevoProducto($_POST['num_serie'],$_POST['des_articulo'], $_POST['familias'], $_POST['tipos'], $_POST['lote']);

	function NuevoProducto($num_serie, $des_articulo,$familias, $tipos, $lote)
	{
		$long=strlen($num_serie);


		if ($long <=7){ //controlo la longitud del numero de serie del articulo cuya longitud sea hasta 7 caractares
		// Create connection
			$servername = "localhost";
			$database = "moyseafood";
			$username = "root";
			$password = "";
	
		
			$link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");
		
		
			$sent_insert="INSERT INTO articulo (familia_id, tipo_id, lote_id, num_serie_articulo,descripcion_articulo) VALUES ('".$familias."', '".$tipos."', '".$lote."','".$num_serie."','".$des_articulo."')";
			$resultado=mysqli_query($link,$sent_insert);
				//Mensaje de creacción exitosa del articulo en la BD
				?>
					<script type="text/javascript">
					alert("Articulo ingresado exitosamente");
					window.location.href='index.html';
					</script>
				<?php	
			}
			else{
				//Mensaje de error que no se puede insertar el articulo debido a que supera la longitud
				?> 
					<script type="text/javascript">
					alert("NO SE PUEDE INSERTA EL ARTICULO!!!!!Supera la longitud del numero de serie");
					window.location.href='index.html';
					</script>
				<?php	
			}
		}
?>










		