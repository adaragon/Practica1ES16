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

function EliminarOferta($cod)
{
	$bd = Db::getInstance();
	
	$bd->Eliminar('oferta', $cod);
	
}

function InsertarUsuario($tipo, $usuario, $clave) 
{

	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	$bd->Insertar('usuarios', array('tipo' => $tipo, 'usuario' => $usuario, 'clave' => $clave));
}

function ModificaUsuarioEnBD($registro, $id)
{

	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	/* Ejecutamos la query */
	$bd->Modificar('usuarios', $registro, $id);
}


function EliminarUsuarioEnBD($id) {
	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	/* Ejecutamos la query */
	$bd->Eliminar('usuarios', $id);
}

