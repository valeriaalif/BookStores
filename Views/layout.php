




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Configuración</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    
    <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
       <!--font-awesome.min.css-->
       <link rel="stylesheet" href="assets/css/font-awesome.min.css">

       <!--linear icon css-->
       <link rel="stylesheet" href="assets/css/linearicons.css">

       <!--animate.css-->
       <link rel="stylesheet" href="assets/css/animate.css">
       
       
       <!--style.css-->
       <link rel="stylesheet" href="assets/css/content.css">
       
       <!--responsive.css-->
       <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<?php
if(session_status() == PHP_SESSION_NONE)
{
  session_start();
} 

function MostrarNavbar(){

    echo ' 
    <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid" >
    <a class="navbar-brand" href="home.php">
    <img src="Img/book-logo.svg" alt="" width="50" height="50" class="d-inline-block align-text-top">  
    </a>
    <button class="navbar-toggler" type="button" " data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="productos.php">
            Productos
          </a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="usuarios.php">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="proveedores.php">Proveedores</a>
      </li>
	  <li class="nav-item">
	  <a class="nav-link" href="perfil.php">Descargas</a>
	</li>
      <li class="nav-item">
        <a class="nav-link" href="perfil.php">Perfil</a>
      </li>
      </ul>
  <div class="login-log">
      <a class="nav-link" href="login.php">Inicia Sesión</a>
      </div>
      <a class="btn btn-custom" href="registro.php" role="button">Registrarse</a>

    
  </div>
</nav>
 ';
/*
 <!--ADMINISTRATIVO-->
 <div class="container-pp-nav" id="PerfilNav" name="PerfilNav"  style="padding-left: 900px"
 <li class="nav-item">
  <a class="nav-link" href="#">
 <img src="Img/profile-icon.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Mi Perfil
   </a>
</li>
</div>
<!--ADMINISTRATIVO-->
*/
}

function MostrarFooter(){

  echo'

  <section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Información</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">Sobre Nosotros</a></li><!--/li-->
										<li><a href="#">Contáctanos</a></li><!--/li-->
										<li><a href="#">Noticias</a></li><!--/li-->
										<li><a href="#">Tienda</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Categorías</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">Misterio</a></li><!--/li-->
										<li><a href="#">Acción</a></li><!--/li-->
										<li><a href="#">Fantasía</a></li><!--/li-->
										<li><a href="#">Romance</a></li><!--/li-->
										<li><a href="#">Ciencia Ficción</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Mis Cuentas</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">Mi Perfil</a></li><!--/li-->
										<li><a href="#">Mi Carrito</a></li><!--/li-->
										<li><a href="#">Community</a></li><!--/li-->
										<li><a href="#">Mis Datos</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Comunidad</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
										Subscríbete a nuestra comunidad para recibir las
                    últimas noticias.
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Ingrese su correo electrónico....">
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										<span><i class="fa fa-location-arrow"></i></span>
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->

  <!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div>
					<p>
						&copy;copyright. designed and developed by BookCorner</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer>
        <!--/.footer-->
		<!--footer end--> ';
}