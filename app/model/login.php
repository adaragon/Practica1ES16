<?php
function Usuario_correcto($usuario, $clave) {

	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	$sql = "SELECT usuarios as user, clave as pass
				FROM `usuarios`
					WHERE `usuario` LIKE '$usuario'";

	/* Ejecutamos la query */
	$bd->Consulta($sql);

	/* Obtenemos los resultados */
	$user = $bd->LeeRegistro();

	if ($user['pass'] == $clave)
		return TRUE;
		else
			return FALSE;
}

function GetTipo($usuario) 
{
	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	$sql = "SELECT tipo
	FROM `usuarios`
	WHERE `usuario` LIKE '$usuario'";

	/* Ejecutamos la query */
	$bd->Consulta($sql);

	$line = $bd->LeeRegistro();

	return $line['tipo'];
}
