<?php
function ExisteUsuario($usuario)
{

	$bd = Db::getInstance();

	$sql = "SELECT COUNT(*) as cont
	FROM `usuarios`
	WHERE `usuario` LIKE '$usuario'";

	/* Ejecutamos la query */
	$bd->Consulta($sql);

	/* Obtenemos los resultados */
	$cont = $bd->LeeRegistro();

	if ($cont['cont'] > 0)
		return true;
		else
			return false;
}

function Obtener_usuario($cod)
{
	$bd = Db::getInstance();

	$sql= 'SELECT * FROM `oferta` WHERE cod= '.$cod;

	$bd->Consulta($sql);

	$registro = Array();

	return $bd->LeeRegistro();
}