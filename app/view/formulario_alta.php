
<body >
<form  action="" method="post">

<div id="contacto">
<div class="container">
 
<div class="row">
<div class="panel panel-primary">
 <div class="panel-heading"><h3 class="list-group-item-heading"><b>Registro de oferta</b></h3></div>
<div id="form">
<form class="form-horizontal" >
<br>
<div class="form-group">
        <label for="usuario" class="col-md-1">Descripción: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="descripcion" placeholder="Descripción de la oferta" value="<?=VP('descripcion')?>">
	  <?php if(isset($errores["descripcion"]))echo $errores["descripcion"] ?>
    </div>
	
	
    <label for="Contrase�a" class="col-md-1">Contactar: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="contacto" placeholder="Persona de contacto" value="<?=VP('contacto')?>">
	  <?php if(isset($errores["contacto"]))echo $errores["contacto"] ?>
    </div>
	</div>
	
	<div class="form-group">
    <label for="apellido1" class="col-md-1">Teléfono: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="telefono" placeholder="Teléfono de contacto"  value="<?=VP('telefono')?>">
	  <?php if(isset($errores["telefono"]))echo $errores["telefono"] ?>
    </div>
	
	
    <label for="apellido2" class="col-md-1">E-mail: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="email" placeholder="Correo electrónico" value="<?=VP('email')?>">
	  <?php if(isset($errores["email"]))echo $errores["email"] ?>
    </div>
	</div>
	
	<div class="form-group">
        <label for="nombre" class="col-md-1">Dirección: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?=VP('direccion')?>">
    </div>
	
	
	<label for="nombre" class="col-md-1">Población: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="poblacion" placeholder="Población" value="<?=VP('poblacion')?>">
	  <?php if(isset($errores["poblacion"]))echo $errores["poblacion"] ?>
    </div>
	</div>
	
	<div class="form-group" >
    <label for="direccion" class="col-md-1">C.P: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="cp" placeholder="Código Postal" value="<?=VP('cp')?>"><?php if(isset($errores["cp"]))echo $errores["cp"] ?>
    </div>
	
	  <label for="fijo" class="col-md-1">Psicólogo: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="psicologo" placeholder="Psicólogo encargado" value="<?=VP('psicologo')?>"><?php if(isset($errores["psicologo"]))echo $errores["psicologo"] ?>
    </div>
	</div>	
	
	<div class="form-group">
    <label for="codigo_p" class="col-md-1">Fecha de creación: </label>
    <div class="col-md-5">
      <input type="text" name="fecha_cre" class="form-control"  value="<?=$fecha_hoy?>" readonly>
    </div>
	
	
    <label for="codigo_p" class="col-md-1">Fecha comuniación: </label>
    <div class="col-md-5">
      <input type="text" class="form-control" placeholder="Fecha de comunicación" name="fecha_co" value="<?=VP('fecha_co')?>"><?php if(isset($errores["fecha_co"]))echo $errores["fecha_co"] ?>
    </div>
	</div>
	
	<div class="clearfix"></div>
	<div class="form-group">
    <label for="movil" class="col-md-1">Canditato selec.: </label>
    <div class="col-md-5">
      <input type="text" name="candidato" value="<?=VP('candidato')?>" class="form-control"  placeholder="Candidato seleccionado"><?php if(isset($errores["candidato"]))echo $errores["candidato"] ?>
    </div>
    
    <label for="movil" class="col-md-1">Otros datos del candidato: </label>
    <div class="col-md-5">
      <input type="text" name="datos" value="<?=VP('datos')?>" class="form-control"  placeholder="Otros datos del candidato seleccionado">
    </div>
	</div>
	
	<div class="clearfix"></div>
	<div class="form-group">
    <label for="provincia" class="col-md-1">Provincia: </label>
    <div class="col-md-5">
      <?=CreaSelect('tbl_provincias', $Provincias, $valorDefecto='');?>
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
</body>