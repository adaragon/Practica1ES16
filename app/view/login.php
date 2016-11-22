<body>
	<form action="" method="post">
		<p><?php if(isset($errores["usuario"]))echo $errores["usuario"] ?></p>
		<p>Nombre de usuario: <input type="text" name="nombre_usuario" value="<?=VP('nombre_usuario')?>"></p>
		<p><?php if(isset($errores["password"]))echo $errores["password"] ?></p>
		<p>Constraseña: <input type="password" name="password"></p>
		<p><input type="submit" name="entrar" value="Entrar"></p>
	</form>
</body>
