<table border="1">
	<tr>
	  <td style="text-align:center;"><strong>N� de oferta</strong></td>
	  <td style="text-align:center;"><strong>Descripcion</strong></td>
	  <td style="text-align:center;"><strong>Persona de contacto</strong></td>
	  <td style="text-align:center;"><strong>Tel�fono de contacto</strong></td>
	  <td style="text-align:center;"><strong>Correo electr�nico</strong></td>
	  <td style="text-align:center;"><strong>Direcci�n</strong></td>
	  <td style="text-align:center;"><strong>Poblaci�n</strong></td>
	  <td style="text-align:center;"><strong>Codigo Postal</strong></td>
	  <td style="text-align:center;"><strong>Estado</strong></td>
	  <td style="text-align:center;"><strong>Provincia</strong></td>
	  <td style="text-align:center;"><strong>Fecha de creaci�n</strong></td>
	  <td style="text-align:center;"><strong>Fecha de comunicaci�n</strong></td>
	</tr>
	<?php EscribeOferta(ObtenerOfertas($nReg, $ofertasenpagina))?>
	<!-- RELACIONAR CON FUNCION QUE ESCRIBA LOS REGISTROS DE LA BASE DE DATOS EN LA TABLA -->
</table>
