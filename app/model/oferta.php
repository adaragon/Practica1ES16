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
	
	return $ofertas;
}


function Obtener_total_registros()
{
	$bd = Db::getInstance();
	
	$sql = 'SELECT  count(*) as numRegistros FROM `oferta`';
	
	$bd->Consulta($sql);
	
	
	$line = $bd->LeeRegistro();
	
	return $line['numRegistros'];
	
}

function Obtener_registro($cod)
{
	$bd = Db::getInstance();
	
	$sql= 'SELECT * FROM `oferta` WHERE cod= '.$cod;
	
	$bd->Consulta($sql);
	
	$registro = Array();
	
	return $bd->LeeRegistro();
}

