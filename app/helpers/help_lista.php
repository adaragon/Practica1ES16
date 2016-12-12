
<?php function EscribeOferta($ofertas) 
{
	foreach ($ofertas as $key => $oferta) : ?>
	
		<tr>
			
			<td style="text-align:center;"><?=$oferta['descripcion'] ?></td>
			<td style="text-align:center;"><?=$oferta['persona'] ?></td>
			<td style="text-align:center;"><?=$oferta['telefono'] ?></td>
			<td style="text-align:center;"><?=$oferta['email'] ?></td>
			<td style="text-align:center;"><?=$oferta['direccion'] ?></td>
			<td style="text-align:center;"><?=$oferta['poblacion'] ?></td>
			
			<td style="text-align:center;"><?=$oferta['estado'] ?></td>
			
			<td style="text-align:center;"><?=$oferta['fecha_creacion'] ?></td>
			<td style="text-align:center;"><?=$oferta['fecha_comunicacion'] ?></td>
			<!--  <td><input type="submit" name="modificar" value="Editar"><input type="submit" name="borrar" value="Borrar"></td>-->
			<td>
				<p><a href="?controller=modificar&cod=<?=$oferta['cod'] ?>"><input type="submit" class="btn btn-primary" value="Editar"></a></p>
				<?php if ($_SESSION['tipousuario'] == 1):  ?>
				<a href="?controller=borrar&cod=<?=$oferta['cod'] ?>"><input type="submit" class="btn btn-danger" value="Borrar"></a>
				<?php endif; ?>	
			</td>
		</tr>
<?php endforeach;
} ?>

<?php function DatosOferta($cod) 
{

    $oferta = Obtener_registro($cod);
    
    return $oferta;
       
}


function MuestraPaginador($pag_actual, $nPags, $url) {
	// Mostramos paginador
	echo '<div class="paginador">';
	echo EnlaceAPagina($url, 1, 'Inicio');
	echo EnlaceAPagina($url, $pag_actual - 1, 'Anterior', $pag_actual > 1);
	//NÃºmeros PÃ¡ginas
	for ($pag = 1; $pag <= $nPags; $pag++) 
	{
		echo EnlaceAPagina($url, $pag, $pag, $pag_actual != $pag);
	}
	echo EnlaceAPagina($url, $pag_actual + 1, 'Siguiente', $pag_actual < $nPags);
	echo EnlaceAPagina($url, $nPags, 'Fin');


	echo "</div>";
}

function EnlaceAPagina($url, $pag, $texto, $activo=true)
{
switch ($texto) {
		case 'Inicio': {
			if ($activo)
				return ' <a class="btn btn-inicio-fin" href="' . $url . 'pag=' . $pag . '" title="Página Inicial"><span class="glyphicon glyphicon-backward"></span></a>  ';
				else
					return ' <a class="btn btn-default"  title="Página Inicial"><span class="glyphicon glyphicon-backward"></span></a>  ';
		}
		break;
	
		case 'Fin': {
			if ($activo)
				return ' <a class="btn btn-inicio-fin" href="' . $url . 'pag=' . $pag . '" title="Página Final"><span class="glyphicon glyphicon-forward"></span></a>  ';
				else
					return ' <a class="btn btn-inicio-fin" title="Página Final"><span class="glyphicon glyphicon-forward"></span></a>  ';
		}
		break;
	
		case 'Anterior': {
			if ($activo)
				return ' <a class="btn btn-anterior-siguiente" href="' . $url . 'pag=' . $pag . '" title="Anterior Página"><span class="glyphicon glyphicon-chevron-left"></span></a>  ';
				else
					return ' <a class="btn btn-anterior-siguiente" title="Anterior Página"><span class="glyphicon glyphicon-chevron-left"></span></a>  ';
		}
		break;
	
		case 'Siguiente': {
			if ($activo)
				return ' <a class="btn btn-anterior-siguiente" href="' . $url . 'pag=' . $pag . '" title="Siguiente Página"><span class="glyphicon glyphicon-chevron-right"></span></a>  ';
				else
					return ' <a class="btn btn-anterior-siguiente" title="Siguiente Página"><span class="glyphicon glyphicon-chevron-right"></span></a>  ';
		}
		break;
	
		case is_numeric($texto): { //Números de las paginas
			if ($activo)
				return '  <a class="btn btn-num-paginas" href="' . $url . 'pag=' . $pag . '">' . $texto . '</a>  ';
				else
					return '  <a class="btn btn-num-paginas" href="' . $url . 'pag=' . $pag . '" style="font: bold 15px sans-serif;">' . $texto . '</a>  ';
		}
		break;
	
		default:
			return '<h1>ERROR</h1>';
			break;
	}
}


?>

