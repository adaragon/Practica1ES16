<?php 
$datos=DatosOferta($_GET['cod']);
/*print_r($datos);
echo "<p>El estado es: [".$datos['estado']."]";
if($datos['estado']=='Pendiente') echo "<p>Esta pendiente</p>";*/
?>

<body>
	<form action="" method="post">
	
		<p>Descripción: <input type="text" name="descripcion" value="<?=$datos['descripcion']?>"><?php if(isset($errores["descripcion"]))echo $errores["descripcion"] ?></p>
		<p>Persona de contacto: <input type="text" name="contacto" value="<?=$datos['persona']?>"><?php if(isset($errores["contacto"]))echo $errores["contacto"] ?></p>
		<p>Teléfono de contacto: <input type="text" name="telefono" value="<?=$datos['telefono']?>"><?php if(isset($errores["telefono"]))echo $errores["telefono"] ?></p>
		<p>Correo electrónico: <input type="text" name="email" value="<?=$datos['email']?>"><?php if(isset($errores["email"]))echo $errores["email"] ?></p>
		<p>Dirección: <input type="text" name="direccion" value="<?=$datos['direccion']?>"></p>
		<p>Población: <input type="text" name="poblacion" value="<?=$datos['poblacion']?>"><?php if(isset($errores["poblacion"]))echo $errores["poblacion"] ?></p>
		<p>Código Postal: <input type="text" name="cp" value="<?=$datos['codigo_p']?>"></p>
		<p>Provincia:<?=CreaSelect('tbl_provincias', $Provincias, $valorDefecto=$datos['provincia']);?> </p>
		<p>Estado: <input type="radio" name="estado" value="Pendiente de inciar selección" <?php if($datos['estado']=='Pendiente de inciar selección') echo 'checked'; ?>> Pendiente de inciar selecci�n
  					<input type="radio" name="estado" value="Realizando selección" <?php if($datos['estado']=='Realizando selección') echo 'checked'; ?>> Realizando selecci�n
 					<input type="radio" name="estado" value="Seleccionado candidato" <?php if($datos[ 'estado']=='Seleccionado candidato') echo 'checked'; ?>> Seleccionado candidato 
 					<input type="radio" name="estado" value="Cancelada" <?php if($datos[ 'estado']=='Cancelada') echo 'checked'; ?>> Cancelada</p>
		<p>Fecha de creación de la oferta: <input type="text" name="fecha_cre" value="<?=$datos['fecha_creacion']?>" readonly> </p>
		<p>Fecha comunicación: <input type="text" name="fecha_co" value="<?=$datos['fecha_comunicacion']?>"><?php if(isset($errores["fecha_co"]))echo $errores["fecha_co"] ?></p>
		<p>Psicologo encargado: <input type="text" name="psicologo" value="<?=$datos['psicologo']?>"><?php if(isset($errores["psicologo"]))echo $errores["psicologo"] ?></p>
		<p>Canditato seleccionado: <input type="text" name="candidato" value="<?=$datos['candidato']?>"><?php if(isset($errores["candidato"]))echo $errores["candidato"] ?></p>
		<p>Otros datos candidato: <input type="text" name="datos" value="<?=$datos['otro_candidato']?>"></p>
		
		<p><input name="enviar" type="submit" value="Enviar datos"></p>
	</form>
</body>
