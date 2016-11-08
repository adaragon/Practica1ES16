<body>
	<form action="" method="post">
	
		<p>Descripción: <input type="text" name="descripcion" value="<?=VP('descripcion')?>"><?php if(isset($errores["descripcion"]))echo $errores["descripcion"] ?></p>
		<p>Persona de contacto: <input type="text" name="contacto" value="<?=VP('contacto')?>"><?php if(isset($errores["contacto"]))echo $errores["contacto"] ?></p>
		<p>Teléfono de contacto: <input type="text" name="telefono" value="<?=VP('telefono')?>"><?php if(isset($errores["telefono"]))echo $errores["telefono"] ?></p>
		<p>Correo electrónico: <input type="text" name="email" value="<?=VP('email')?>"><?php if(isset($errores["email"]))echo $errores["email"] ?></p>
		<p>Dirección: <input type="text" name="direccion" value="<?=VP('direccion')?>"></p>
		<p>Población: <input type="text" name="poblacion" value="<?=VP('poblacion')?>"><?php if(isset($errores["poblacion"]))echo $errores["poblacion"] ?></p>
		<p>Código Postal: <input type="text" name="cp" value="<?=VP('cp')?>"><?php if(isset($errores["cp"]))echo $errores["cp"] ?></p>
		<p>Provincia:<?=CreaSelect('tbl_provincias', $Provincias, $valorDefecto='');?> </p>
		<!-- Al ser alta,estado por defecto será Pendiente de inciar selección, -->
		<p>Fecha de creación de la oferta: <input type="text" name="fecha_cre" value="<?=$fecha_hoy?>" readonly> </p>
		<p>Fecha comunicación: <input type="text" name="fecha_co" value="<?=VP('fecha_co')?>"><?php if(isset($errores["fecha_co"]))echo $errores["fecha_co"] ?></p>
		<p>Psicologo encargado: <input type="text" name="psicologo" value="<?=VP('psicologo')?>"><?php if(isset($errores["psicologo"]))echo $errores["psicologo"] ?></p>
		<p>Canditato seleccionado: <input type="text" name="candidato" value="<?=VP('candidato')?>"><?php if(isset($errores["candidato"]))echo $errores["candidato"] ?></p>
		<p>Otros datos candidato: <input type="text" name="datos" value="<?=VP('datos')?>"></p>
		
		<p><input name="enviar" type="submit" value="Enviar datos"></p>
	</form>
</body>