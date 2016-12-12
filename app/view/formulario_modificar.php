<?php 
$datos=DatosOferta($_GET['cod']);
/*print_r($datos);
echo "<p>El estado es: [".$datos['estado']."]";
if($datos['estado']=='Pendiente') echo "<p>Esta pendiente</p>";*/
?>

<form  action="" method="post">

<div id="alta">
<div class="container">
 
<div class="row">
<div class="panel panel-primary">
 <div class="panel-heading"><h3 class="list-group-item-heading"><b>Modificación de la oferta</b></h3></div>
<div id="form">
<form class="form-horizontal" >
<br>
<div class="form-group">
        <label for="usuario" class="col-md-1">Descripción: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="descripcion" placeholder="Descripción de la oferta" value="<?=$datos['descripcion']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>>
	  <?php if(isset($errores["descripcion"]))echo $errores["descripcion"] ?>
    </div>
	
	
    <label for="Contrase�a" class="col-md-1">Contactar: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="contacto" placeholder="Persona de contacto" value="<?=$datos['persona']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>>
	  <?php if(isset($errores["contacto"]))echo $errores["contacto"] ?>
    </div>
	</div>
	
	<div class="form-group">
    <label for="apellido1" class="col-md-1">Teléfono: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="telefono" placeholder="Teléfono de contacto"  value="<?=$datos['telefono']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>>
	  <?php if(isset($errores["telefono"]))echo $errores["telefono"] ?>
    </div>
	
	
    <label for="apellido2" class="col-md-1">E-mail: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="email" placeholder="Correo electrónico" value="<?=$datos['email']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>>
	  <?php if(isset($errores["email"]))echo $errores["email"] ?>
    </div>
	</div>
	
	<div class="form-group">
        <label for="nombre" class="col-md-1">Dirección: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?=$datos['direccion']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>>
    </div>
	
	
	<label for="nombre" class="col-md-1">Población: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="poblacion" placeholder="Población" value="<?=$datos['poblacion']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>>
	  <?php if(isset($errores["poblacion"]))echo $errores["poblacion"] ?>
    </div>
	</div>
	
	<div class="form-group" >
    <label for="direccion" class="col-md-1">C.P: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="cp" placeholder="Código Postal" value="<?=$datos['codigo_p']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>><?php if(isset($errores["cp"]))echo $errores["cp"] ?>
    </div>
	
	  <label for="fijo" class="col-md-1">Psicólogo: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="psicologo" placeholder="Psicólogo encargado" value="<?=$datos['psicologo']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>><?php if(isset($errores["psicologo"]))echo $errores["psicologo"] ?>
    </div>
	</div>	
	
	<div class="form-group">
    <label for="codigo_p" class="col-md-1">Fecha de creación: </label>
    <div class="col-md-5">
      <input type="text" name="fecha_cre" class="form-control"  value="<?=$datos['fecha_creacion']?>" readonly>
    </div>
	
	
    <label for="codigo_p" class="col-md-1">Fecha comuniación: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" placeholder="Fecha de comunicación" name="fecha_co" value="<?=$datos['fecha_comunicacion']?>" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>><?php if(isset($errores["fecha_co"]))echo $errores["fecha_co"] ?>
    </div>
	</div>
	
	<div class="clearfix"></div>
	<div class="form-group">
    <label for="movil" class="col-md-1">Canditato selec.: </label>
    <div class="col-md-5">
      <input type="text" name="candidato" value="<?=$datos['candidato']?>" class="form-control"  placeholder="Candidato seleccionado" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>><?php if(isset($errores["candidato"]))echo $errores["candidato"] ?>
    </div>
    
    <label for="movil" class="col-md-1">Otros datos del candidato: </label>
    <div class="col-md-5">
      <input type="text" name="datos" value="<?=$datos['otro_candidato']?>" class="form-control"  placeholder="Otros datos del candidato seleccionado" <?php if ($_SESSION['tipousuario'] == 2){echo 'readonly';}?>>
    </div>
	</div>
	
	<div class="clearfix"></div>
	<?php if ($_SESSION['tipousuario'] == 1):  ?>
	<div class="form-group">
    <label for="provincia" class="col-md-1">Provincia: </label>
    <div class="col-md-5">
      <?=CreaSelect('tbl_provincias', $Provincias, $valorDefecto=$datos['provincia']);?>
    </div>
    <?php endif; ?>
	<?php if ($_SESSION['tipousuario'] == 2):  ?>
	<div class="form-group">
	<?php endif; ?>
	<label for="provincia" class="col-md-1">Estado: </label>
    <div class="col-md-5">
      <input type="radio" name="estado" value="Pendiente de inciar selección" <?php if($datos['estado']=='Pendiente de inciar selección') echo 'checked'; ?>> Pendiente de inciar selecci�n
  					<input type="radio" name="estado" value="Realizando selección" <?php if($datos['estado']=='Realizando selección') echo 'checked'; ?>> Realizando selecci�n
 					<input type="radio" name="estado" value="Seleccionado candidato" <?php if($datos[ 'estado']=='Seleccionado candidato') echo 'checked'; ?>> Seleccionado candidato 
 					<input type="radio" name="estado" value="Cancelada" <?php if($datos[ 'estado']=='Cancelada') echo 'checked'; ?>> Cancelada</p>
    </div>
	</div>
	
</form>
</div>

<button  type="submit" name="enviar" class="btn btn-primary" style="margin-top: 20; margin-bottom:30; margin-left:550 ">Enviar datos</button>
</div>
</div>
</div>
</div>
</form>