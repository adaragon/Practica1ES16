<?php function EscribeUsuarios($usuarios) 
{
	foreach ($usuarios as $key => $usuario) : ?>
	
		
		
			<tr>
				
				<td style="text-align:center;"><?=$usuario['nombre'] ?></td>
				<td style="text-align:center;"><?=Obtener_tipo($usuario['tipo']) ?></td>
				<td style="text-align:center;">
					<a href="?controller=modificar_usuario&cod=<?=$usuario['cod'] ?>"><input type="submit" class="btn btn-primary" value="Editar"></a>
					<a href="?controller=borrar_usuario&cod=<?=$usuario['cod'] ?>"><input type="submit"  class="btn btn-danger" value="Borrar"></a>	
				</td>
				
			</tr>
<?php endforeach;
} 
 function DatosUsuario($cod) 
{

    $usuario = Obtener_usuario($cod);
    
    return $usuario;
       
}