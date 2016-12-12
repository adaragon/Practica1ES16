<?php
//include __DIR__."/../classdb.php";

function InsertaOferta($oferta)
{
	$bd = Db::getInstance();
	
	$bd->Insertar('oferta', $oferta);
	
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

function InsertarUsuarios($usuario)
{
	$bd = Db::getInstance();

	$bd->Insertar('usuarios', $usuario);

}


function ModificaUsuario($registro, $cod)
{

	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	/* Ejecutamos la query */
	$bd->Modificar('usuarios', $registro, $cod);
}


function EliminarUsuario($cod) 
{
	/* Creamos la instancia del objeto. Ya estamos conectados */
	$bd = Db::getInstance();

	/* Ejecutamos la query */
	$bd->Eliminar('usuarios', $cod);
}

