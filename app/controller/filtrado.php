<?php 

$formato_fecha='^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[/\\/](19|20)\d{2}$^';
$expresion_nom="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|";//Solo admite letras y espacios
$codigo_postal= "^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$^"; //5 n�meros
$email= "/[\w]+@{1}[\w]+\.[a-z]{2,3}/"; //formato de email correcto
$telefono= "/^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/"; //solo n�meros y espacios o guiones

		if(empty($_POST["descripcion"]))
		{
			$errores["descripcion"] = "<p><font color=red>El campo descripcion no puede est�r vac�o </font></p>";
			$Error=true;
			
		}
		
		if(empty($_POST["contacto"]))
		{
			$errores["contacto"] = "<p><font color=red>El campo Persona de contacto no puede estar vac�o </font></p>";
			$Error=true;
			
		}
		else
		{
			if(! preg_match($expresion_nom,$_POST["contacto"]))
			{
				$errores["contacto"] = "<p><font color=red>La persona de conacto s�lo puede contener letras</font></p>";
				$Error=true;
			}
		}
		
		if(empty($_POST["telefono"]))
		{
			$errores["telefono"] = "<p><font color=red>El campo Tel�fono de contacto no puede estar vac�o </font></p>";
			$Error=true;
		}
		else
			if(! preg_match($telefono,$_POST["telefono"]))
			{
				$errores["telefono"] = "El tel�fono de contacto s�lo puede contener n�meros, espacios y guiones.</font></p>";
				$Error=true;
			}
		if(! preg_match($expresion_nom,$_POST["poblacion"]))
		{
			$errores["poblacion"] = "<p><font color=red>El nombre de la poblaci�n s�lo puede contener letras</font></p>";
			$Error=true;
		}
		if($_POST["cp"])
		{
			if(! preg_match($codigo_postal,$_POST["cp"]))
			{
				$errores["cp"] = "<p><font color=red>El c�digo postal s�lo puede contener 5 n�meros.</font></p>";
				$Error=true;
			}
		}
		
		if(empty($_POST["email"]))
		{
			$errores["email"] = "<p><font color=red>El campo Correo Electr�nico no puede estar vac�o </font></p>";
			$Error=true;
		}
		else
			if(! preg_match($email,$_POST["email"]))
			{
				$errores["email"] = "<p><font color=red>El formato del correo electr�nico es incorrecto</font></p>";
				$Error=true;
			}
		
		if (! empty($_POST["fecha_co"]))
		{
			if(! preg_match($formato_fecha,$_POST["fecha_co"]))
			{
				$errores["fecha_co"] = "<p><font color=red>El formato de la fecha de comunicaci�n es incorrecto.Debe de ser dd/mm/aaaa</font></p>";
				$Error=true;
			
			}
			else
				if(strtotime($_POST["fecha_co"]) < strtotime($_POST["fecha_cre"]))
				{
					$errores["fecha_co"] = "<p><font color=red>La fecha de comunicaci�n no puede ser anterior a la de creaci�n</font></p>";
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
					$errores["fecha_co"] = "<p><font color=red>La fecha de comunicaci�n es incorrecta</font></p>";
					$Error=true;
				}
			}
		}
		
		if (! empty ($_POST["psicologo"]))
		{
			if(! preg_match($expresion_nom,$_POST["psicologo"]))
			{
				$errores["psicologo"] = "<p><font color=red>El nombre del psicologo referenciado s�lo puede contener letras</font></p>";
				$Error=true;
			}
		}
		
		if (! empty ($_POST["candidato"]))
		{
			if(! preg_match($expresion_nom,$_POST["candidato"]))
			{
				$errores["candidato"] = "<p><font color=red>El nombre del candidato referenciado s�lo puede contener letras</font></p>";
				$Error=true;
			}
		}
		
?>