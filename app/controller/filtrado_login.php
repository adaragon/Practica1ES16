<?php
$errores_login=array();
$Error_login=false;

if(empty($_POST["nombre_usuario"]))
{
			$errores_login["nombre_usuario"] = "El campo Nombre de Usuario no puede est�r vac�o <br>";
			$Error_login=true;
			
}

if(empty($_POST["password"]))
{
	$errores_login["password"] = "El campo Contrase�a no puede est�r vac�o <br>";
	$Error_login=true;
		
}