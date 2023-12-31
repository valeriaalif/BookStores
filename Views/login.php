
<?php

  include_once '../Controllers/iniciarsesionController.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/loginform.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>
	<img class="wave" src="Img/wave.png">
	<div class="container">
		<div class="img">
			<img src="svg/bg.svg">
		</div>
		<div class="login-content">
			<form action="login.php">
				<img src="svg/avatar.svg">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Correo Electrónico</h5>
           		   		<input type="text" class="input" id="emailInicio" name="emailInicio">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input"  id="contrasenaInicio" name="contrasenaInicio">
            	   </div>
            	</div>
            	<a href="#">¿Olvidó su contraseña?</a>
            	<button class="formbold-btn"  class="btn" id="btnIniciarSesion" name="btnIniciarSesion" value="Iniciar Sesión"></button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
