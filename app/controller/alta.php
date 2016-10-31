<?php
include __DIR__.'/../config.php';
include __DIR__.'/../classdb.php';
include_once __DIR__.'/../helpers/helps.php';
include_once __DIR__.'/../model/provincias.php';
$Provincias = GetProvincias();

//variables a usar
$fecha_hoy= date("d/m/Y");
$errores=array();
$Error=false;
$expresion_nom="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|";//Solo admite letras y espacios
$codigo_postal= "^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$^"; //5 números
$email= "/[\w]+@{1}[\w]+\.[a-z]{2,3}/"; //formato de email correcto
$telefono= "/^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/"; //solo números y espacios o guiones

if (! $_POST)
{
	include __DIR__.'/../view/formulario_alta.php';
}
else
{
	if(isset($_POST['enviar'])) 
	{
		
		include __DIR__.'/filtrado.php';
		
	}
		
		echo 'errores comprobados';
		
		if ($Error)
		{
			echo 'hay errores';
			include __DIR__.'/../view/formulario_alta.php';
		}
		else
		{
			/*$oferta= array(
   							  "descripcion" => $_POST['descripcion'],
   							  "contacto" => $_POST['contacto'],
							  "telefono" => $_POST['telefono'],
							  "email" =>$_POST['email'] ,
							  "direccion" => $_POST['direccion'],
							  "poblacion" => $_POST['poblacion'],
							  "cp" =>$_POST['cp'] ,
							  "provincia" => $_POST['tbl_provincias'],
							  //FALTA ESTADO
							  "fecha_cre" => $_POST['fecha_cre'],
							  "fecha_co" => $_POST['fecha_co'],
							  "psicologo" => $_POST['psicologo'],
							  "candidato" => $_POST['candidato'],
							  "datos" => $_POST['datos'],
			);
			
			InsertaOferta($oferta);
			
			echo "DATOS INTRODUCIDOS";*/
			echo "<p>BIEN</p>";
		}
		
}