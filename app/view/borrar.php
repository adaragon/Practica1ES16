<?php 
$datos=DatosOferta($_GET['cod']);
?>
<form action="" method="post">
<table border="1">
	<tr>
	  <td style="text-align:center;"><strong>Nº de oferta</strong></td>
	  <td style="text-align:center;"><strong>Descripcion</strong></td>
	  <td style="text-align:center;"><strong>Persona de contacto</strong></td>
	  <td style="text-align:center;"><strong>Teléfono de contacto</strong></td>
	  <td style="text-align:center;"><strong>Correo electr�nico</strong></td>
	  <td style="text-align:center;"><strong>Dirección</strong></td>
	  <td style="text-align:center;"><strong>Población</strong></td>
	  <td style="text-align:center;"><strong>Codigo Postal</strong></td>
	  <td style="text-align:center;"><strong>Estado</strong></td>
	  <td style="text-align:center;"><strong>Provincia</strong></td>
	  <td style="text-align:center;"><strong>Fecha de creación</strong></td>
	  <td style="text-align:center;"><strong>Fecha de comunicación</strong></td>
	  <td style="text-align:center;"><strong>Psicologo</strong></td>
	  <td style="text-align:center;"><strong>Candidato</strong></td>
	  <td style="text-align:center;"><strong>Otros datos del candidato</strong></td>
	</tr>
	<tr>
			<td><?=$datos['cod'] ?></td>
			<td><?=$datos['descripcion'] ?></td>
			<td><?=$datos['persona'] ?></td>
			<td><?=$datos['telefono'] ?></td>
			<td><?=$datos['email'] ?></td>
			<td><?=$datos['direccion'] ?></td>
			<td><?=$datos['poblacion'] ?></td>
			<td><?=$datos['codigo_p'] ?></td>
			<td><?=$datos['estado'] ?></td>
			<td><?=$datos['provincia'] ?></td>
			<td><?=$datos['fecha_creacion'] ?></td>
			<td><?=$datos['fecha_comunicacion'] ?></td>
			<td><?=$datos['psicologo'] ?></td>
			<td><?=$datos['candidato'] ?></td>
			<td><?=$datos['otro_candidato'] ?></td>
		</tr>
	
</table>

<h1>¿Desea borrar esta oferta?</h1>

<p><input type="submit" value="Si" name="de"><!--  <a name='de' href="?controller=borrar&cod=&de=1">Sí</a>--> <a href="?controller=lista_ofertas"><input type="submit" value="No"></a></p>
</form>