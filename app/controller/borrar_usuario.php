<?php

//include __DIR__.'/../config.php';
//include __DIR__.'/../classdb.php';
include_once HELPERS_PATH.'helps.php';
include_once MODEL_PATH.'consultas_bd.php';
include_once MODEL_PATH.'usuario.php';
include_once HELPERS_PATH.'help_lista_usuario.php';



if (! $_POST)
{
	include VIEW_PATH.'borrar_usuario.php';
}
else
{
	if($_POST['de'])
	{
		EliminarUsuario($_GET['cod']);
		include CTRL_PATH.'lista_usuarios.php';
	}


}
?>

