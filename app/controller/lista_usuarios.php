<?php
include_once __DIR__.'/../classdb.php';
include_once MODEL_PATH.'lista_usuarios.php';
include_once MODEL_PATH.'usuario.php';
include_once HELPERS_PATH.'help_lista_usuario.php';
include_once HELPERS_PATH.'help_lista.php';

$usuariosporpaginas=10; //usuarios que se mostrarán por páginas
$myURL = '?controller=lista_usuarios&';

if (isset($_GET['pag']))
{
	$pag=$_GET['pag']; //Obtiene el número de la página
}
else
{
	$pag=1; //Muestra la primera página
}

// Calculamos el registro por el que se empieza en la sentencia LIMIT
$nReg = ($pag - 1) * $usuariosporpaginas;

$usuario= Array();
$usuarios = Obtener_Usuarios($nReg, $usuariosporpaginas);

$total_registros = Obtener_total_registros_u();

$totalPaginas = ceil($total_registros / $usuariosporpaginas);// Total de páginas que vamos a tener

//Muestra Vista lista
include_once VIEW_PATH .'lista_usuarios.php';
