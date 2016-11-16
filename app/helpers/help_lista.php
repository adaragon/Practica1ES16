
<?php function EscribeOferta($ofertas) 
{
	foreach ($ofertas as $key => $oferta) : ?>
	
		<tr>
			<td><?=$oferta['cod'] ?></td>
			<td><?=$oferta['descripcion'] ?></td>
			<td><?=$oferta['persona'] ?></td>
			<td><?=$oferta['telefono'] ?></td>
			<td><?=$oferta['email'] ?></td>
			<td><?=$oferta['direccion'] ?></td>
			<td><?=$oferta['poblacion'] ?></td>
			<td><?=$oferta['codigo_p'] ?></td>
			<td><?=$oferta['estado'] ?></td>
			<td><?=$oferta['provincia'] ?></td>
			<td><?=$oferta['fecha_creacion'] ?></td>
			<td><?=$oferta['fecha_comunicacion'] ?></td>
			<!--  <td><input type="submit" name="modificar" value="Editar"><input type="submit" name="borrar" value="Borrar"></td>-->
			<td>
				<a href="?controller=modificar&cod=<?=$oferta['cod'] ?>"><input type="submit" value="Editar"></a>
				<a href="?controller=borrar&cod=<?=$oferta['cod'] ?>"><input type="submit" value="Borrar"></a>	
			</td>
		</tr>
<?php endforeach;
} ?>

<?php function DatosOferta($cod) 
{

    $oferta = Obtener_registro($cod);
    
    return $oferta;
    
    
    
}

?>

