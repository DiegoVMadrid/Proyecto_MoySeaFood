<?php
$servername = "localhost";
        $database = "moyseafood";
        $username = "root";
        $password = "";
$link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");

$la_familia = $_POST['familia'];

$sentenciatipo="SELECT * FROM tipo WHERE familia_id_t = $la_familia";
//$sentenciatipo="SELECT * FROM tipo";
$restipo=mysqli_query($link,$sentenciatipo) or die (mysqli_error());

echo '<option value="0">Seleccione</option>';

while ( $fila = $restipo->fetch_assoc() )
{
	echo '<option value="' . $fila['id_tipo']. '">' . $fila['descripcion_tipo'] . '</option>' . "\n";
}
?>