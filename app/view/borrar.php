<?php
$datos=DatosOferta($_GET['cod']);
?>
<form action="" method="post">
<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading"><h3 class="list-group-item-heading"><b><img src="../assets/img/alerta.png" style="width: 30px; height: 30px;">Oferta seleccionada para borrar<img src="../assets/img/alerta.png" style="width: 30px; height: 30px;"></b></h3></div>
  
  <table class="table table-bordered">
	<tr>
	  
	  <td style="text-align:center;"><strong>Descripcion</strong></td>
	  <td style="text-align:center;"><strong>Persona de contacto</strong></td>
	  <td style="text-align:center;"><strong>Teléfono de contacto</strong></td>
	  <td style="text-align:center;"><strong>Correo electr�nico</strong></td>
	  <td style="text-align:center;"><strong>Dirección</strong></td>
	  <td style="text-align:center;"><strong>Población</strong></td>
	  
	  <td style="text-align:center;"><strong>Estado</strong></td>
	  
	  <td style="text-align:center;"><strong>Fecha de creación</strong></td>
	  <td style="text-align:center;"><strong>Fecha de comunicación</strong></td>
	  
	  <td style="text-align:center;"><strong>Candidato</strong></td>
	  <td style="text-align:center;"><strong>Otros datos del candidato</strong></td>
	</tr>
	<tr>
			
			<td style="text-align:center;"><?=$datos['descripcion'] ?></td>
			<td style="text-align:center;"><?=$datos['persona'] ?></td>
			<td style="text-align:center;"><?=$datos['telefono'] ?></td>
			<td style="text-align:center;"><?=$datos['email'] ?></td>
			<td style="text-align:center;"><?=$datos['direccion'] ?></td>
			<td style="text-align:center;"><?=$datos['poblacion'] ?></td>
			
			<td style="text-align:center;"><?=$datos['estado'] ?></td>
			
			<td style="text-align:center;"><?=$datos['fecha_creacion'] ?></td>
			<td style="text-align:center;"><?=$datos['fecha_comunicacion'] ?></td>
			
			<td style="text-align:center;"><?=$datos['candidato'] ?></td>
			<td style="text-align:center;"><?=$datos['otro_candidato'] ?></td>
		</tr>
	
</table>
  
 </div>
 <p><h3>¿Seguro que desea borrar esta oferta?: <input type="submit" class="btn btn-primary"  value="Si" name="de"> &nbsp <a href="?controller=lista_ofertas"><input class="btn btn-primary" type="submit" value="No"></a></h3></p>
</div>
</form>