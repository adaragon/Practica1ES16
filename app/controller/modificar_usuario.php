<?php
//include __DIR__.'/../config.php';
//include_once __DIR__.'/../classdb.php';
include_once HELPERS_PATH.'helps.php';
include_once MODEL_PATH.'consultas_bd.php';
include_once MODEL_PATH.'usuario.php';
include_once HELPERS_PATH.'help_lista_usuario.php';
include_once MODEL_PATH.'tipos_usuario.php';
$Error=false;
$estados = GetTipos();

if(! $_POST)
{
	include VIEW_PATH.'modificar_usuario.php';
}
else
{
	include __DIR__.'/filtrado_usuario.php';
	if($Error)
	{
		include VIEW_PATH.'modificar_usuario.php';
	}
	else
	{
		$usuario_m=array(
				"nombre" => $_POST['nombre_usuario'],
				"password" => $_POST['password'],
				"tipo"=> $_POST['tbl_tipos']
		);
		
		ModificaUsuario($usuario_m, $_GET['cod']);
		
		include CTRL_PATH.'lista_usuarios.php';
	}
	
}