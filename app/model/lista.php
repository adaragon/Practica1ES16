<?php
function ObtenerOfertas($nReg, $ofertasenpagina)
{
	$bd = Db::getInstance();
	
	$sql = 'SELECT  * FROM `oferta`  LIMIT ' . $nReg . ', ' .$nElementosxPagina;
	
	$bd->Consulta($sql);
	
	$ofertas = Array();
	
	while ($line = $bd->LeeRegistro()) {
		$ofertas[] = $line;
	}
	return $ofertas;
}

function Obtener_total_registros()
{
	$bd = Db::getInstance();
	
	/* Creamos una query sencilla */
	$sql = 'SELECT  count(*) as numRegistros FROM `oferta`';
	
	/* Ejecutamos la query */
	$bd->Consulta($sql);
	
	
	$line = $bd->LeeRegistro();
	
	return $line['numRegistros'];
}