<?php
function ObtenerOfertas($nReg, $ofertasenpagina)
{
	$bd = Db::getInstance();
	
	$sql = 'SELECT  * FROM oferta  LIMIT ' . $nReg .', '.$ofertasenpagina;
	
	$res=$bd->Consulta($sql);
	
	$ofertas = Array();
	
	while ($line = $bd->LeeRegistro($res)) 
	{
		$ofertas[] = $line;
	}
	print_r($ofertas);
	return $ofertas;
}


function Obtener_total_registros()
{
	$bd = Db::getInstance();
	
	$sql = 'SELECT  count(*) as numRegistros FROM `oferta`';
	
	$bd->Consulta($sql);
	
	/* Realizamos un bucle para ir obteniendo los resultados */
	$line = $bd->LeeRegistro();
	
	return $line['numRegistros'];
	
}

