<?php
	include "conexion.php";

	$cod = $_GET['cod'];
	$sel = "SELECT * FROM insumos WHERE id_insumo ='".$cod."'";
	$res = mysqli_query($con, $sel);
	$f = mysqli_fetch_array($res);
	print "<form action='editInsOK.php' method='post'>
	<table align='center'>
			<tr>
				<td>Id insumo:</td>
				<td><input type='text' name='txtID' value='".$f['id_insumo']."' readonly=''></td>
			</tr>
			<tr>
				<td>Nombre insumo:</td>
				<td><input type='text' name='txtNombre' value='".$f['nombre']."' readonly=''> </td>
			</tr>
			<tr>
				<td>Nro. serie:</td>
				<td><input type='text' name='txtSerie' value='".$f['nro_serie']."' readonly=''> </td>
			</tr>
			<tr>
				<td>Tipo:</td>
				<td><input type='text' name='txtTipo' value='".$f['tipo']."' readonly=''></td>
			</tr>
			<tr>
				<td>Ubicacion:</td>
				<td><input type='text' name='txtUbicacion' value='".$f['ubicacion']."'> </td>
			</tr>
			<tr>
				<td>Stock:</td>
				<td><input type='text' name='txtStock' value='".$f['stock']."'> </td>
			</tr>
			<tr>
				<td></td>
				<td><input type='submit' value='Guardar cambios'></td>
			</tr>
			<tr>
				<td></td>
				<td><a href='gestionInsumos.php'>Gestionar Insumos</a></td>
			</tr>
		</table>
	</form>";
	mysqli_close($con);
?>