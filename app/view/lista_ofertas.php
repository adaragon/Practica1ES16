<table border="1">
	<tr>
	  <td style="text-align:center;"><strong>Nº de oferta</strong></td>
	  <td style="text-align:center;"><strong>Descripcion</strong></td>
	  <td style="text-align:center;"><strong>Persona de contacto</strong></td>
	  <td style="text-align:center;"><strong>Teléfono de contacto</strong></td>
	  <td style="text-align:center;"><strong>Correo electrónico</strong></td>
	  <td style="text-align:center;"><strong>Dirección</strong></td>
	  <td style="text-align:center;"><strong>Población</strong></td>
	  <td style="text-align:center;"><strong>Codigo Postal</strong></td>
	  <td style="text-align:center;"><strong>Estado</strong></td>
	  <td style="text-align:center;"><strong>Provincia</strong></td>
	  <td style="text-align:center;"><strong>Fecha de creación</strong></td>
	  <td style="text-align:center;"><strong>Fecha de comunicación</strong></td>
	  <td style="text-align:center;"><strong>Opciones</strong></td>
	</tr>
	<?php EscribeOferta(ObtenerOfertas($nReg, $ofertasenpagina))?>
	
</table>
<?php  MuestraPaginador($pag, $totalPaginas, $myURL);?>