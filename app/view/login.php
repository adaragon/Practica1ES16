<body>
	<form action="" method="post">
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Iniciar sesión</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                               		 <?php if(isset($errores_login["login"]))echo $errores_login["login"] ?>
                                	<?php if(isset($errores_login["nombre_usuario"]))echo $errores_login["nombre_usuario"] ?>
                                    <input class="form-control" placeholder="Nombre de usuario" name="nombre_usuario" type="text" value="<?=VP('nombre_usuario')?>" autofocus>
                                </div>
                                <div class="form-group">
                                	<?php if(isset($errores_login["password"]))echo $errores_login["password"] ?>
                                    <input class="form-control" placeholder="Contraseña" name="pass" type="password" >
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="entrar" class="btn btn-primary btn-lg btn-block" value="Iniciar Sesión" />
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</form>
</body>
