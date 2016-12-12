<?php
function verificar_usuario ($usuario,$clave,&$result)
{


	$bd = Db::getInstance();

	$sql='SELECT * from usuarios where nombre = "'.$usuario.'" and password = "'.$clave.'";';
	$count=0;

	$bd->Consulta($sql);

	while ($reg = $bd->LeeRegistro())
	{
		$count++;

		$result=$reg;
	}

	if ($count==1)
	{
		return 1;
	}
	else
	{
		return 0;
	}


}

function GetTipo($usuario) 
{
	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	$sql = "SELECT tipo
	FROM `usuarios`
	WHERE `nombre` LIKE '$usuario'";

	/* Ejecutamos la query */
	$bd->Consulta($sql);

	$line = $bd->LeeRegistro();

	return $line['tipo'];
}
