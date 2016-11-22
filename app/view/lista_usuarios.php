<table border="1">
	<tr>
	  <td style="text-align:center;"><strong>Nº de usuario</strong></td>
	  <td style="text-align:center;"><strong>Usuario</strong></td>
	  <td style="text-align:center;"><strong>Tipo</strong></td>
	  <td style="text-align:center;"><strong>Opciones</strong></td>
	</tr>
	<?php 
	
	foreach ($usuarios as $key => $usuario) : ?>
		
			<tr>
				<td><?=$usuario['id'] ?></td>
				<td><?=$usuario['nombre'] ?></td>
				<td><?=$usuario['tipo'] ?></td>
				<td>
					<a href="?controller=modificar_usuario&id=<?=$usuario['id'] ?>"><input type="submit" value="Editar"></a>
					<a href="?controller=borrar_usuario&id=<?=$usuario['id'] ?>"><input type="submit" value="Borrar"></a>	
				</td>
				
			</tr>
	<?php endforeach;	?>
	
</table>
<?php  MuestraPaginador($pag, $totalPaginas, $myURL);?>
