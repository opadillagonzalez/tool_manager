<?php
	include "conexion.php";

	$id = $_POST["txtID"];
	$nombre = $_POST["txtNombre"];
	$serie = $_POST["txtSerie"];
	$tipo = $_POST["txtTipo"];
	$ubic = $_POST["txtUbicacion"];
	$stock = $_POST["txtStock"];

	$upd="UPDATE insumos SET ubicacion='".$ubic."', stock='".$stock."' WHERE id_insumo='".$id."'";

	$res = mysqli_query($con, $upd);
	if(!$res){
		echo "<table align='center'>";
		echo "<h3>Error al cambiar los datos</h3><hr/>";
		echo "<a href='gestionInsumos.php'>Volver a gestion</a></table>";
	}
	else{
		echo "<table align='center'>";
		echo "<h3>Datos actualizados</h3><hr/>";
		echo "<a href='gestionInsumos.php'>Volver a gestion</a></table>";
	}
?>