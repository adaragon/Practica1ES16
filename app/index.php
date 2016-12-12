<?php

//CONTROLADOR FRONTAL 
session_start();

define('CTRL_PATH', __DIR__.'/controller/');
define('MODEL_PATH', __DIR__.'/model/');
define('VIEW_PATH', __DIR__.'/view/');
define('TEMPLATE_PATH', __DIR__.'/plantilla/');
define('HELPERS_PATH', __DIR__.'/helpers/');

if (!file_exists('config.php')) 
{ //Si no existe el fichero de configuración, accede al instalador
	include(TEMPLATE_PATH . 'encabezado.php');

	echo '<header style="color: blue;">';
	include(CTRL_PATH . 'instalador.php');
	echo '</header>';

	include(TEMPLATE_PATH . 'pie.php');
} else 
{

	/* Incluimos el fichero de la clase */
	include_once '../install/classdb.php';


	

?>
<html>
    <head>
        <title>JobYesterday</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>    
<body>
<?php 
include(TEMPLATE_PATH.'encabezado.php');
include(TEMPLATE_PATH.'menu.php'); 

// Cuerpo del controlador frontal
$ctrl=isset($_GET['controller']) ? $_GET['controller'] : 'inicio';

// Nombre del fichero a incluir
$file=CTRL_PATH.$ctrl.'.php';
if (file_exists($file))
{
    include($file);
}
else
{   // Error 404
    include(CTRL_PATH.'error404.php');
}

include(TEMPLATE_PATH.'pie.php');
}
?>
</body>
</html>
 <?php 
//include 'controller/alta.php';
 ?>