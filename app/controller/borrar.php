<?php 

include __DIR__.'/../config.php';
include __DIR__.'/../classdb.php';
include_once HELPERS_PATH.'helps.php';
include_once MODEL_PATH.'provincias.php';
include_once MODEL_PATH.'consultas_bd.php';
include_once MODEL_PATH.'oferta.php';
include_once HELPERS_PATH.'help_lista.php';
$Provincias = GetProvincias();


if (! $_POST)
{
	 include VIEW_PATH.'borrar.php';
}
else
{
	if($_POST['de'])
	{
		EliminarOferta($_GET['cod']);
		echo "DATOS BORRADOS";
	}
		
	
}
?>