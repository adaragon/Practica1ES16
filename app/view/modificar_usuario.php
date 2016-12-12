<?php $datos = DatosUsuario($_GET['cod']);?>

<form  action="" method="post">

<div id="contacto">
<div class="container">
 
<div class="row">
<div class="panel panel-primary">
 <div class="panel-heading"><h3 class="list-group-item-heading"><b>Modificación de usuario</b></h3></div>
<div id="form">
<form class="form-horizontal" >
<br>
	<?php if(isset($errores["existe"]))echo $errores["existe"] ?>
	<div class="form-group">
    <label for="usuario" class="col-md-1">Nombre de Usuario: </label>
    <div class="col-md-5">
    	<?php if(isset($errores["nombre"]))echo $errores["nombre"] ?>
      <input type="text" class="form-control" name="nombre_usuario" placeholder="Nombre de usuario" value="<?=$datos['nombre']?>">
    </div>
	
	
    <label for="Contraseña" class="col-md-1">Contraseña: </label>
    <div class="col-md-5">
    	<?php if(isset($errores["password"]))echo $errores["password"] ?>
      <input type="text" class="form-control" name="password"  placeholder="Contraseña" value="<?=$datos['password']?>">
    </div>
	
	
	</div>
	<div class="clearfix"></div>
	<div class="form-group">
		<label for="Contrase?a" class="col-md-1">Tipo de usuario: </label>
    <div class="col-md-5">
      <?=CreaSelect('tbl_tipos', $estados, $valorDefecto=$datos['tipo']);?>
    </div>
	</div>
	
</form>
</div>

<button  type="submit" name="enviar" class="btn btn-primary" style="margin-top: 20; margin-bottom:30; margin-left:550 ">Modificar</button>
</div>
</div>
</div>
</div>
</form>
