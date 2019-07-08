<?php

	NuevoProducto($_POST['nom_familia']);

	function NuevoProducto($nom_familia)
	{
		$long=strlen($nom_familia);		

		if ($long >=5){ //controlo la longitud del numero de serie del articulo cuya longitud sea 5 o mas caracteres
		// Create connection
			$servername = "localhost";
			$database = "moyseafood";
			$username = "root";
			$password = "";
	
		
			$link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");
		
		
			$sent_insert="INSERT INTO familia (nomb_familia) VALUES ('".$nom_familia."')";
			$resultado=mysqli_query($link,$sent_insert);
				//Mensaje de creacción exitosa del articulo en la BD
				?>
					<script type="text/javascript">
					alert("Familia ingresada exitosamente");
					window.location.href='index.html';
					</script>
				<?php
			}
			else{
				//Mensaje de error que no se puede insertar la familia debido a que no llega a la longitud necesaria
			?>
				<script type="text/javascript">
				alert("NO SE PUEDE INSERTAR LA FAMILIA!!!!!Tamaño del nombre insuficiente");
				window.location.href='index.html';
				</script>
			<?php	
			}

		}
	?>










		