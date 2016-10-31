<?php 
if(empty($_POST["descripcion"]))
		{
			$errores["descripcion"] = "El campo descripcion no puede estár vacío <br>";
			$Error=true;
			
		}
		
		if(empty($_POST["contacto"]))
		{
			$errores["contacto"] = "El campo Persona de contacto no puede estar vacío <br>";
			$Error=true;
			
		}
		else
		{
			if(! preg_match($expresion_nom,$_POST["contacto"]))
			{
				$errores["contacto"] = "La persona de conacto sólo puede contener letras<br>";
				$Error=true;
			}
		}
		
		if(empty($_POST["telefono"]))
		{
			$errores["telefono"] = "El campo Teléfono de contacto no puede estar vacío <br>";
			$Error=true;
		}
		else
			if(! preg_match($telefono,$_POST["telefono"]))
			{
				$errores["telefono"] = "El teléfono de contacto sólo puede contener números, espacios y guiones.<br>";
				$Error=true;
			}
		
		if($_POST["cp"])
		{
			if(! preg_match($codigo_postal,$_POST["cp"]))
			{
				$errores["cp"] = "El código postal sólo puede contener 5 números.<br>";
				$Error=true;
			}
		}
		
		if(empty($_POST["email"]))
		{
			$errores["email"] = "El campo Correo Electrónico no puede estar vacío <br>";
			$Error=true;
		}
		else
			if(! preg_match($email,$_POST["email"]))
			{
				$errores["email"] = "El formato del correo electrónico es incorrecto<br>";
				$Error=true;
			}
?>