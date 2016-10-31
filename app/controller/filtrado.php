<?php 
if(empty($_POST["descripcion"]))
		{
			$errores["descripcion"] = "El campo descripcion no puede est�r vac�o <br>";
			$Error=true;
			
		}
		
		if(empty($_POST["contacto"]))
		{
			$errores["contacto"] = "El campo Persona de contacto no puede estar vac�o <br>";
			$Error=true;
			
		}
		else
		{
			if(! preg_match($expresion_nom,$_POST["contacto"]))
			{
				$errores["contacto"] = "La persona de conacto s�lo puede contener letras<br>";
				$Error=true;
			}
		}
		
		if(empty($_POST["telefono"]))
		{
			$errores["telefono"] = "El campo Tel�fono de contacto no puede estar vac�o <br>";
			$Error=true;
		}
		else
			if(! preg_match($telefono,$_POST["telefono"]))
			{
				$errores["telefono"] = "El tel�fono de contacto s�lo puede contener n�meros, espacios y guiones.<br>";
				$Error=true;
			}
		
		if($_POST["cp"])
		{
			if(! preg_match($codigo_postal,$_POST["cp"]))
			{
				$errores["cp"] = "El c�digo postal s�lo puede contener 5 n�meros.<br>";
				$Error=true;
			}
		}
		
		if(empty($_POST["email"]))
		{
			$errores["email"] = "El campo Correo Electr�nico no puede estar vac�o <br>";
			$Error=true;
		}
		else
			if(! preg_match($email,$_POST["email"]))
			{
				$errores["email"] = "El formato del correo electr�nico es incorrecto<br>";
				$Error=true;
			}
?>