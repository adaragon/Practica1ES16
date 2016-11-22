<?php
include __DIR__.'/../config.php';
include_once __DIR__.'/../classdb.php';
include_once MODEL_PATH.'consultas_bd.php';
include_once MODEL_PATH.'login.php';
include_once HELPERS_PATH.'helps.php';

if(! $_POST)
{
	include VIEW.PATH.'login.php';
}
else
{
	if($_POST['entrar'])
	{
		include CTRL_PATH.'filtrado_login.php';
		
		if(isset($Error_login))
		{
			include VIEW.PATH.'login.php';
		}
		else
		{
			if (Usuario_correcto($_POST['nombre_usuario'], $_POST['password']))
			{
				$_SESSION['nombre_usuario'] = $_POST['nombre_usuario'];
				$_SESSION['login_correcto'] = "TRUE";
				$_SESSION['horainicio'] = date('h:i:s');
				$_SESSION['tipousuario'] = GetTipo($_POST['nombre_usuario']);
				
				include CTRL_PATH.'inicio.php'; 
			}
		}
	}
}

