

<div id="inicio"  >
  <nav class="navbar navbar-default" role="navigation">
    <!-- El logotipo y el icono que despliega el men� se agrupan
         para mostrarlos mejor en los dispositivos m�viles -->
    <div class="navbar-header"  style="height: 70px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegaci�n</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="../assets/img/ofertas-de-empleo1.jpg" style="width: 70px; height: 70px;">
    </div>
  
    <!-- Agrupar los enlaces de navegaci�n, los formularios y cualquier
         otro elemento que se pueda ocultar al minimizar la barra -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
      	<?php if (isset($_SESSION['login_correcto'])):  ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-paperclip"></span> &nbsp Ofertas <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  	<?php if ($_SESSION['tipousuario'] == 1):  ?> 
                    <li><a href='?controller=alta'><span class="glyphicon glyphicon-plus"></span> &nbsp Añadir oferta</a></li>
                    <?php endif; ?>
                    <li><a href='?controller=lista_ofertas'><span class="glyphicon glyphicon-tasks"></span> &nbsp Lista de ofertas</a></li>
                    <li><a href='?controller=buscar'><span class="glyphicon glyphicon-search"></span> &nbsp Buscar ofertas</a></li>
                  </ul>
                </li>
				<?php if ($_SESSION['tipousuario'] == 1):  ?> 
				 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> &nbsp Usuarios <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href='?controller=alta_usuario'><span class="glyphicon glyphicon-plus"></span> &nbsp Añadir usuario</a></li>
                    <li><a href='?controller=lista_usuarios'><span class="glyphicon glyphicon-tasks"></span> &nbsp Lista de usuarios</a></li>
                  </ul>
                </li>
			    <?php endif; ?>
		<?php endif; ?>
			<ul class="nav navbar-nav navb6ar-right" style=" float: right;">
				<?php if (!isset($_SESSION['login_correcto'])) :  ?>    
                        <li class="page-scroll">
                            <a href="?controller=login" title="Login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                <?php endif; ?>
                <?php if (isset($_SESSION['login_correcto'])) :  ?>
                         <span style=" float: right; color: #0000FF;"> 
                            <span class="glyphicon glyphicon-user"> </span>  
                            <?php
                            if ($_SESSION['tipousuario'] == 1) //Si es el usuario es de tipo Administrador
                                echo "Administrador: " . $_SESSION['nombre_usuario'];
                            else
                            	if($_SESSION['tipousuario'] == 2)
                                echo "Psicologo: " . $_SESSION['nombre_usuario']; //Si es el usuario es de tipo Psicologo
                            ?> 

                        </span>
                        <br>
                        <span style=" float: right; color: #0000FF;"> 
                            <a href="?controller=cerrar_sesion" style="color: #0000FF;"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión,</a>    
                            <?php echo $_SESSION['horainicio']; ?> 
                        </span>
                        <br>
                  <?php endif; ?>
			
			</ul>
         
      </ul>
      
       
    </div>
  </nav>
</div>
