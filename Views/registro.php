
<?php
  include_once '../Controllers/usuariosController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form by Colorlib</title>
<link rel="stylesheet" href="css/signup.css">
</head>

<body class="hold-transition signup-page">

<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    
    <img src="svg/register.svg" style="width: 450px;height: 450px;">

    <form action="" method="POST">
      <div class="formbold-form-title">
        <h2 class="">Regístrese ahora</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt.
        </p>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="emailRegistro" class="formbold-form-label">
            Correo Electrónico
          </label>
          <input
            type="email"
            name="emailRegistro"
            
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="nombre" class="formbold-form-label"> Nombre</label>
          <input
            type="text"
            name="nombre"
            id="nombre"
            class="formbold-form-input"
          />
        </div>
      </div>
      
      <div class="formbold-mb-3">
        <label for="contrasena" class="formbold-form-label">
        Contraseña
        </label>
        <input
          type="password"
          name="contrasena"
          id="contrasena"
          class="formbold-form-input"
        />
      </div>
      
      <div class="formbold-mb-3">
        <label for="contrasena" class="formbold-form-label">
        Tipo Usuario
        </label>
        <input
          type="number"
          name="tipo_usuario"
          id="tipo_usuario"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-checkbox-wrapper">
        <label for="supportCheckbox" class="formbold-checkbox-label">
          <div class="formbold-relative">
            <input
              type="checkbox"
              id="supportCheckbox"
              class="formbold-input-checkbox"
            />
            <div class="formbold-checkbox-inner">
              <span class="formbold-opacity-0">
                <svg
                  width="11"
                  height="8"
                  viewBox="0 0 11 8"
                  fill="none"
                  class="formbold-stroke-current"
                >
             
                </svg>
              </span>
            </div>
          </div>
          I agree to the defined
          <a href="#"> terms, conditions, and policies</a>
        </label>
      </div>

      <button class="formbold-btn" id="btnRegistrarse" name="btnRegistrarse">Registrarse</button>
    </form>
  </div>
</div>
</body>
</html>