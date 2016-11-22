<?php function EscribeUsuarios($usuarios) 
{
	foreach ($usuarios as $key => $usuario) : ?>
	
		<tr>
			<td><?=$usuario['id'] ?></td>
			<td><?=$usuario['nombre'] ?></td>
			<td><?=$usuario['tipo'] ?></td>
			<!--  <td><input type="submit" name="modificar" value="Editar"><input type="submit" name="borrar" value="Borrar"></td>-->
		</tr>
<?php endforeach;
} 
 function DatosUsuario($cod) 
{

    $usuario = Obtener_usuario($cod);
    
    return $usuario;
       
}