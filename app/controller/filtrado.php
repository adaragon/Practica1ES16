<?php 

$formato_fecha='^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[/\\/](19|20)\d{2}$^';
$expresion_nom="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|";//Solo admite letras y espacios
$codigo_postal= "^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$^"; //5 números
$email= "/[\w]+@{1}[\w]+\.[a-z]{2,3}/"; //formato de email correcto
$telefono= "/^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/"; //solo números y espacios o guiones

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
		if(! preg_match($formato_fecha,$_POST["fecha_co"]))
		{
			$errores["fecha_co"] = "El formato de la fecha de comunicación es incorrecto.Debe de ser dd/mm/aaaa<br>";
			$Error=true;
				
		}
		else 
			if($_POST["fecha_co"]<$_POST["fecha_cre"])
			{
				$errores["fecha_co"] = "La fecha de comunicación no puede ser anterior a la de creación<br>";
				$Error=true;
			}
			else
			{
				$fecha=$_POST['fecha_co'];
				$array=explode("/",$fecha);
				
				$dia=$array[0];
				$mes=$array[1];
				$anyo=$array[2];
				
				if(!(checkdate($array[1], $array[0], $array[2])))
				{
					$errores["fecha_co"] = "La fecha de comunicación es incorrecta<br>";
					$Error=true;
				}
			}
?>