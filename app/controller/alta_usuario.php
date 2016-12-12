<?php
//include __DIR__.'/../config.php';
//include_once __DIR__.'/../classdb.php';
include_once HELPERS_PATH.'helps.php';
include_once MODEL_PATH.'consultas_bd.php';
include_once MODEL_PATH.'tipos_usuario.php';
include_once MODEL_PATH.'usuario.php';
$errores=array();
$Error=false;
$existe=false;
$estados = GetTipos();

if(! $_POST)
{
	include VIEW_PATH.'alta_usuario.php';
}
else
{
	include __DIR__.'/filtrado_usuario.php';
	
	
	if($Error)
	{
		include VIEW_PATH.'alta_usuario.php';
	}
	else
	{
		
				$nuevo_usuario= array(
			
						"nombre" => $_POST['nombre_usuario'],
						"password" => $_POST['password'],
						"tipo"=> $_POST['tbl_tipos']
			
				);
					
				InsertarUsuarios($nuevo_usuario);
				include CTRL_PATH.'lista_usuarios.php';
			
		}
		
		
	
	

}