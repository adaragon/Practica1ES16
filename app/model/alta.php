<?php
include __DIR__."/../classdb.php";

function InsertaTarea($tarea)
{
	$bd = Db::getInstance();
	
	$bd->Insertar('oferta', $tarea);
	
}

