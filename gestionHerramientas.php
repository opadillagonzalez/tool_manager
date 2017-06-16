<?php
	include "conexion.php";

	$sel = "SELECT * FROM herramientas";
	$res = mysqli_query($con,$sel);
	print "<table align='center' border='1'>";
	print "<tr><th>ID</th><th>NOMBRE</th><th>NRO. SERIE</th><th>TIPO</th><th>UBICACIÓN</th><th>STOCK</th>
	<th>MODIFICAR</th></tr>";
	while($f=mysqli_fetch_array($res)){
		print"<tr><td>".$f['id_herramienta']."</td><td>".$f['nombre']."</td><td>".$f['nro_serie']."</td>
		<td>".$f['tipo']."</td><td>".$f['ubicacion']."</td><td>".$f['stock']."</td>
		<td><a href='editarHerramienta.php?cod=".$f['id_herramienta']."''>Modificar</a></td></tr>";
	}
	print "<tr><td><a href='ingresarHerramienta.html'>Volver atrás</a></td></tr>";
	print "</table>";
	mysqli_close($con);
?>