<?php
//include __DIR__.'/../config.php';
//include_once __DIR__.'/../classdb.php';
include_once MODEL_PATH.'consultas_bd.php';
include_once MODEL_PATH.'login.php';
include_once HELPERS_PATH.'helps.php';

if(! $_POST)
{
	include VIEW_PATH.'login.php';
}
else
{
	if($_POST['entrar'])
	{
		include CTRL_PATH.'filtrado_login.php';
		
		if(isset($Error_login))
		{
			include VIEW_PATH.'login.php';
		}
		else
		{
			include VIEW_PATH.'inicio.php';
		}
		
	}
}

