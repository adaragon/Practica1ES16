<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading"><h3 class="list-group-item-heading"><b>Lista de Usuarios</b></h3><div style="text-align:right;">Número total de registros: <?=$total_registros ?></div></div>
  
  <table class="table table-bordered">
	<tr>
	  
	  <td style="text-align:center;"><strong>Usuario</strong></td>
	  <td style="text-align:center;"><strong>Tipo</strong></td>
	  <td style="text-align:center;"><strong>Opciones</strong></td>
	</tr>
	<?php EscribeUsuarios(Obtener_Usuarios($nReg, $usuariosporpaginas))?>
	
</table>
  
 </div>
 <?php  MuestraPaginador($pag, $totalPaginas, $myURL);?>
</div>
