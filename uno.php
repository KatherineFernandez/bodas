<?php
$conexion=mysqli_connect("localhost","root","","bdbodas");
$query= "SELECT * FROM evento";
	$resultado = $conexion ->query($query);
?>