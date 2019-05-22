<?php
	include("conexion.php");
	$nombreevento= $_POST ['nombreevento'];
	$fecha= $_POST['fecha'];
	$lugar= $_POST ['lugar'];
	$query = "INSERT INTO evento(nombre, fecha, lugar) VALUES ('$nombreevento','$fecha','$lugar')";

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