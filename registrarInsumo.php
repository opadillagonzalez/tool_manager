<?php
	include "conexion.php";

	$nombre = $_POST["txtNombre"];
	$serie = $_POST["txtSerie"];
	$tipo = $_POST["txtTipo"];
	$ubic = $_POST["txtUbicacion"];
	$stock = $_POST["txtStock"];

	$insertar = "INSERT INTO insumos(nombre, nro_serie, tipo, ubicacion, stock) VALUES('".$nombre."', '".$serie."', '".$tipo."', '".$ubic."', ".$stock.")";

	$resultado = mysqli_query($con, $insertar);
	if(!$resultado){
		echo "Error al registrar insumo<hr/>";
		echo "<a href='ingresarInsumo.html'>Volver atrás</a>";
	}
	else{
		echo "Datos ingresados<hr/>";
		echo "<a href='ingresarInsumo.html'>Volver atrás</a>";
	}
	mysqli_close($con);
?>