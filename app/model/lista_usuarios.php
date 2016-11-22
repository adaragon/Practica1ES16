<?php
function Obtener_Usuarios() 
{
	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	$sql = 'SELECT id as id, usuario as nombre, tipo as tipo
            FROM `usuarios`';

	/* Ejecutamos la query */
	$bd->Consulta($sql);

	// Creamos el array donde se guardarán los usuarios
	$usuarios = Array();

	/* Realizamos un bucle para ir obteniendo los resultados */
	while ($line = $bd->LeeRegistro()) {
		$usuarios[] = $line;
	}
	return $usuarios;
}