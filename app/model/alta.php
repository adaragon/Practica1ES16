<?php
include __DIR__."/../classdb.php";

function InsertaOferta($tarea)
{
	$bd = Db::getInstance();
	
	$bd->Insertar('oferta', $tarea);
	
}

