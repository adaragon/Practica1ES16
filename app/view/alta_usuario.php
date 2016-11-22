<body>
	<form action="" method="post">
	
		<p>Nombre de usuario: <input type="text" name="nombre_usuario" value="<?=VP('nombre_usuario')?>"></p>
		<p>Contraseña: <input type="text" name="password" value="<?=VP('password')?>"></p>
		<p>Tipo:<?=CreaSelect('tbl_tipos', $estados, $valorDefecto='');?> </p>

		<p><input name="enviar" type="submit" value="Registrar"></p>
	</form>
</body>
