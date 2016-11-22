<?php $datos = DatosUsuario($_GET['id']);?>

<body>
	
	<form action="" method="post">
	
		<p>Nombre de usuario: <input type="text" name="nombre_usuario" value="<?=$datos['nombre']?>"></p>
		<p>Contraseña: <input type="text" name="password" value="<?=$datos['password']?>"></p>
		<p>Tipo:<?=CreaSelect('tbl_tipos', $estados, $valorDefecto=$datos['tipo']);?> </p>

		<p><input name="enviar" type="submit" value="Registrar"></p>
	</form>
</body>
