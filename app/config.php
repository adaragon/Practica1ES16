<?php 
$db_conf=array(
		'servidor'=>'localhost',
		'usuario'=>'root',
		'password'=>'',
		'base_datos'=>'prueba'
);
// Si la conexi�n falla, aparece el error
if($db_conf === false)
{
	echo 'Ha habido un error <br>'.mysqli_connect_error();
}
else
{
	echo '<p>Conectado</p>';
}

?>
