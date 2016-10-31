<body>
	<form action="" method="post">
	
		<p>Descripción: <input type="text" name="descripcion" value="<?=VP('descripcion')?>"></p>
		<p>Persona de contacto: <input type="text" name="contacto" value="<?=VP('contacto')?>"></p>
		<p>Teléfono de contacto: <input type="text" name="telefono" value="<?=VP('telefono')?>"></p>
		<p>Correo electrónico: <input type="text" name="email" value="<?=VP('email')?>"></p>
		<p>Dirección: <input type="text" name="direccion" value="<?=VP('direccion')?>"></p>
		<p>Población: <input type="text" name="poblacion" value="<?=VP('poblacion')?>"></p>
		<p>Código Postal: <input type="text" name="cp" value="<?=VP('cp')?>"></p>
		<p>Provincia:<?=CreaSelect('tbl_provincias', $Provincias, $valorDefecto='');?> </p>
		<p>Estado: <input type="radio" name="estado" value="P"> Pendiente de inciar selección
  					<input type="radio" name="estado" value="R"> Realizando selección
 					<input type="radio" name="estado" value="S"> Seleccionado candidato 
 					<input type="radio" name="estado" value="C"> Cancelada</p>
		<p>Fecha de creación de la oferta: <input type="text" name="fecha_cre" value="<?=$fecha_hoy?>" readonly> </p>
		<p>Fecha comunicación: <input type="text" name="fecha_co" value="<?=VP('fecha_co')?>"></p>
		<p>Psicologo encargado: <input type="text" name="psicologo" value="<?=VP('psicologo')?>"></p>
		<p>Canditato seleccionado: <input type="text" name="candidato" value="<?=VP('candidato')?>"></p>
		<p>Otros datos candidato: <input type="text" name="datos" value="<?=VP('datos')?>"></p>
		
		<p><input name="enviar" type="submit" value="Enviar datos"></p>
	</form>
</body>
