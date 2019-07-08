<?php
$servername = "localhost";
        $database = "moyseafood";
        $username = "root";
        $password = "";
$link = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");

$sentenciafamilia = "SELECT * FROM familia";
$resfamilia=mysqli_query($link,$sentenciafamilia) or die (mysqli_error());

echo '<option value="0">Seleccione</option>';

while ( $fila = $resfamilia->fetch_assoc() )
{
	echo '<option value="' . $fila['id_familia'] . '">' . $fila['nomb_familia'] . '</option>' . "\n";
}
?>