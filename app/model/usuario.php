<?php
function ExisteUsuario($usuario)
{

	$bd = Db::getInstance();

	$sql = "SELECT COUNT(*) as cont
	FROM `usuarios`
	WHERE `nombre`= ".$usuario;

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

	$sql= 'SELECT * FROM `usuarios` WHERE id= '.$cod;

	$bd->Consulta($sql);

	$registro = Array();

	return $bd->LeeRegistro();
	print_r($sql);
}
