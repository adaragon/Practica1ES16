<?php
//include __DIR__.'/../config.php';
//include __DIR__.'/../classdb.php';
include_once __DIR__.'/../helpers/helps.php';
include_once __DIR__.'/../model/provincias.php';
include_once MODEL_PATH.'consultas_bd.php';
include_once MODEL_PATH.'oferta.php';
include_once HELPERS_PATH.'help_lista.php';
$Provincias = GetProvincias();

//variables a usar

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
		
		
		
		if ($Error)
		{
			
			include __DIR__.'/../view/formulario_modificar.php';
		}
		else
		{
			if ($_SESSION['tipousuario'] == 1)
			{
				$provincia=$_POST['tbl_provincias'];
			}
			else
				if($_SESSION['tipousuario'] == 2)
				{
					
					$datos=DatosOferta($_GET['cod']);

					
					$provincia=$datos['provincia'];
				}
			 	$oferta_m= array(
   							  "descripcion" => $_POST['descripcion'],
   							  "persona" => $_POST['contacto'],
							  "telefono" => $_POST['telefono'],
							  "email" =>$_POST['email'] ,
							  "direccion" => $_POST['direccion'],
							  "poblacion" => $_POST['poblacion'],
							  "codigo_p" =>$_POST['cp'] ,
							  "provincia" => $provincia,
							  "estado" => $_POST['estado'],
							  "fecha_creacion" => $_POST['fecha_cre'],
							  "fecha_comunicacion" => $_POST['fecha_co'],
							  "psicologo" => $_POST['psicologo'],
							  "candidato" => $_POST['candidato'],
							  "otro_candidato" => $_POST['datos'],
			);
			
			ModificarOferta('oferta',$oferta_m,$_GET['cod']);
			
			include CTRL_PATH.'lista_ofertas.php';
		}
		
}
