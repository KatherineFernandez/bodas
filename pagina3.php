<?php
	include("conexion.php");
	$tipo= $_POST ['tipo'];
	$query = "INSERT INTO categoria(tipo) VALUES ('$tipo')";

	$resultado = $conexion ->query($query);
		if($resultado){
		echo '<script type="text/javascript"> 
		alert("evento Registrado")';
	}
	else { 
			echo '<script type="text/javascript"> 
			alert("evento NO Registrado ---Vuelva a intentar---")';
	}
?>