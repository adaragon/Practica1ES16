<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading"><h3 class="list-group-item-heading"><b>Lista de Ofertas</b></h3> <div style="text-align:right;">Número total de registros: <?=$total_registros ?></div></div>
  
  <table class="table table-bordered" >
    <tr>
	 
	  <td style="text-align:center;"><strong>Descripción</strong></td>
	  <td style="text-align:center;"><strong>Persona de contacto</strong></td>
	  <td style="text-align:center;"><strong>Teléfono de contacto</strong></td>
	  <td style="text-align:center;"><strong>Correo electrónico</strong></td>
	  <td style="text-align:center;"><strong>Dirección</strong></td>
	  <td style="text-align:center;"><strong>Población</strong></td>
	  
	  <td style="text-align:center;"><strong>Estado</strong></td>
	  <td style="text-align:center;"><strong>Fecha de creación</strong></td>
	  <td style="text-align:center;"><strong>Fecha de comunicación</strong></td>
	  <td style="text-align:center;"><strong>Opciones</strong></td>
	</tr>
	<?php EscribeOferta(ObtenerOfertas($nReg, $ofertasenpagina))?>
  </table>
  
 </div>
 <?php  MuestraPaginador($pag, $totalPaginas, $myURL);?>
</div>

