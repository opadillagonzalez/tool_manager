<?php
	include "conexion.php";

	$cod = $_GET['cod'];
	$sel = "SELECT * FROM herramientas WHERE id_herramienta ='".$cod."'";
	$res = mysqli_query($con, $sel);
	$f = mysqli_fetch_array($res);
	print "<form action='editHerOK.php' method='post'>
	<table align='center'>
			<tr>
				<td>Id herramienta:</td>
				<td><input type='text' name='txtID' value='".$f['id_herramienta']."' readonly=''></td>
			</tr>
			<tr>
				<td>Nombre herramienta:</td>
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
				<td><a href='gestionHerramientas.php'>Gestionar herramientas</a></td>
			</tr>
		</table>
	</form>";
	mysqli_close($con);
?>