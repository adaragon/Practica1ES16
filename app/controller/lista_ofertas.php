<?php
include_once __DIR__.'/../classdb.php';
include_once MODEL_PATH.'lista_oferta.php';
include_once MODEL_PATH.'oferta.php';
include_once HELPERS_PATH.'help_lista.php';


$ofertasenpagina=10; //número de resultados por páginas

if (isset($_GET['pag']))
{
	$pag=$_GET['pag']; //Obtiene el número de la página
}	
else
{
	$pag=1; //Muestra la primera página
}
	
// Calculamos el registro por el que se empieza en la sentencia LIMIT
$nReg = ($pag - 1) * $ofertasenpagina;

$oferta= Array();
$oferta = ObtenerOfertas($nReg, $ofertasenpagina);

$total_registros = Obtener_total_registros();

$totalPaginas = ceil($total_registros / $ofertasenpagina);// Total de páginas que vamos a tener

//Muestra Vista lista
include_once VIEW_PATH .'lista_ofertas.php';