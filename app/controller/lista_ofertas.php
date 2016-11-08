<?php

include_once __DIR__.'/../model/lista.php';


$ofertasenpagina=10; //n�mero de resultados por p�ginas

if (isset($_GET['pag']))
{
	$pag=$_GET['pag']; //Obtiene el n�mero de la p�gina
}	
else
{
	$pag=1; //Muestra la primera p�gina
}
	
// Calculamos el registro por el que se empieza en la sentencia LIMIT
$nReg = ($pag - 1) * $ofertasenpagina;

$oferta[];
$oferta = ObtenerOfertas($nReg, $ofertasenpagina);

$total_registros = Obtener_total_registros();

$totalPaginas = ceil($total_registros / $ofertasenpagina);// Total de p�ginas que vamos a tener

//Muestra Vista lista
include_once VIEW_PATH .'lista.php';