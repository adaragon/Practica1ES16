<?php
include __DIR__.'/../config.php';
include __DIR__.'/../classdb.php';
include_once __DIR__.'/../helpers/helps.php';
include_once __DIR__.'/../model/provincias.php';
include_once MODEL_PATH.'consultas_bd.php';
include_once MODEL_PATH.'oferta.php';
include_once HELPERS_PATH.'help_lista.php';
$Provincias = GetProvincias();

//variables a usar
$fecha_hoy= date("d/m/Y");
$errores=array();
$Error=false;


if (! $_POST)
{
	include __DIR__.'/../view/formulario_modificar.php';
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
			include __DIR__.'/../view/formulario_modificar.php';
		}
		else
		{
			 	$oferta_m= array(
   							  "descripcion" => $_POST['descripcion'],
   							  "persona" => $_POST['contacto'],
							  "telefono" => $_POST['telefono'],
							  "email" =>$_POST['email'] ,
							  "direccion" => $_POST['direccion'],
							  "poblacion" => $_POST['poblacion'],
							  "codigo_p" =>$_POST['cp'] ,
							  "provincia" => $_POST['tbl_provincias'],
							  "estado" => $_POST['estado'],
							  "fecha_creacion" => $_POST['fecha_cre'],
							  "fecha_comunicacion" => $_POST['fecha_co'],
							  "psicologo" => $_POST['psicologo'],
							  "candidato" => $_POST['candidato'],
							  "otro_candidato" => $_POST['datos'],
			);
			
			 	print_r($oferta_m);
			ModificarOferta('oferta',$oferta_m,$_GET['cod']);
			
			echo "DATOS MODIFICADOS";
			echo "<p>BIEN</p>";
		}
		
}
