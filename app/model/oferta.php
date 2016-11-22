<?php

function Obtener_registro($cod)
{
	$bd = Db::getInstance();
	
	$sql= 'SELECT * FROM `oferta` WHERE cod= '.$cod;
	
	$bd->Consulta($sql);
	
	$registro = Array();
	
	return $bd->LeeRegistro();
}

