<?php
$errores_login=array();
$Error_login=false;

if(empty($_POST["nombre_usuario"]))
{
			$errores_login["nombre_usuario"] = "<p><font color=red>El campo Nombre de Usuario no puede estár vacío </font></p>";
			$Error_login=true;
			
}

if(empty($_POST["pass"]))
{
	$errores_login["password"] = "<p><font color=red>El campo Contraseña no puede estár vacío </font></p>";
	$Error_login=true;
		
}

if(!empty($_POST['nombre_usuario']) && !empty($_POST['pass']) )
{
	
	if (verificar_usuario($_POST['nombre_usuario'], $_POST['pass'],$result)==1)
	{
		//echo 'entra';
		$_SESSION['nombre_usuario'] = $_POST['nombre_usuario'];
		$_SESSION['login_correcto'] = "TRUE";
		$_SESSION['horainicio'] = date('h:i:s');
		$_SESSION['tipousuario'] = GetTipo($_POST['nombre_usuario']);
		
		print_r($_SESSION['tipousuario']);
	}
	else
	{
		$errores_login["login"] = '<div class="alert alert-danger">
                                <b>Â¡Error!</b> Usuario o contraseña incorrecto
                            </div> ';
		$Error_login=true;
		
	}
}