<?php
function GetTipos()
{
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd = Db::getInstance();

	$sql = 'SELECT cod as cod, tipo as nom
                                    FROM `tbl_tipos`';

	/*Ejecutamos la query*/
	$bd->Consulta($sql);

	// Creamos el array donde se guardarán las provincias
	$tipos = Array();

	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($reg = $bd->LeeRegistro())
	{
		$tipos[$reg['cod']] = $reg['nom'];
	}
	return $tipos;
}

function Obtener_tipo($cod)
{
	$bd = Db::getInstance();

	$sql= 'SELECT tipo as nom FROM `tbl_tipos` WHERE cod= '.$cod;

	$bd->Consulta($sql);

	$line = $bd->LeeRegistro();

	return $line['nom'];
	
}

