<?php
//include __DIR__."/../classdb.php";

function InsertaOferta($tarea)
{
	$bd = Db::getInstance();
	
	$bd->Insertar('oferta', $tarea);
	
}


function ModificarOferta($tabla, $registro, $cod) 
{
	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	$bd->Modificar($tabla, $registro, $cod);
}

function EliminarOferta()
{
	$bd = Db::getInstance();
	
	$bd->Eliminar('oferta', $cod);
	
}
