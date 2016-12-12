<?php
function Obtener_Usuarios($nReg, $usuariosporpaginas) 
{
	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	$sql = 'SELECT  * FROM usuarios  LIMIT ' . $nReg .', '.$usuariosporpaginas;

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

function Obtener_total_registros_u()
{
	$bd = Db::getInstance();

	$sql = 'SELECT  count(*) as numRegistros FROM `usuarios`';

	$bd->Consulta($sql);


	$line = $bd->LeeRegistro();

	return $line['numRegistros'];

}