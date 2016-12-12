<?php
$datos_usuario=DatosUsuario($_GET['cod']);
?>
<form action="" method="post">
<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading"><h3 class="list-group-item-heading"><b><img src="../assets/img/alerta.png" style="width: 30px; height: 30px;">Usuario seleccionado para borrar<img src="../assets/img/alerta.png" style="width: 30px; height: 30px;"></b></h3></div>
  
  <table class="table table-bordered">
	<tr>
	  
	  <td style="text-align:center;"><strong>Usuario</strong></td>
	  <td style="text-align:center;"><strong>Tipo</strong></td>
	  
	</tr>
		<tr>
			<td style="text-align:center;"><?=$datos_usuario['nombre'] ?></td>
			<td style="text-align:center;"><?=$datos_usuario['tipo'] ?></td>

		</tr>
	
</table>
  
 </div>
 <p><h3>¿Seguro que desea borrar este usuario?: <input type="submit" class="btn btn-primary"  value="Si" name="de"> &nbsp <a href="?controller=lista_ofertas"><input class="btn btn-primary" type="submit" value="No"></a></h3></p>
</div>
</form>
