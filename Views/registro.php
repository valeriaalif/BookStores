<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form by Colorlib</title>
<link rel="stylesheet" href="css/signup.css">
</head>

<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    
    <img src="svg/register.svg" style="width: 450px;height: 450px;">

    <form action="https://formbold.com/s/FORM_ID" method="POST">
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
            id="emailRegistro"
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

      <div class="formbold-input-flex">
        <div>
          <label for="apellido1" class="formbold-form-label"> Primer Apellido </label>
          <input
            type="text"
            name="apellido1"
            id="primerapellido"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="apellido2" class="formbold-form-label"> Segundo Apellido </label>
          <input
            type="text"
            name="apellido2"
            id="apellido2"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="direccion" class="formbold-form-label">
          Dirección
        </label>
        <input
          type="text"
          name="direccion"
          id="direccion"
          class="formbold-form-input"
        />
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
        Confirmar Contraseña
        </label>
        <input
          type="password"
          name="contrasena2"
          id="contrasena2"
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
                  <path
                    d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                    stroke-width="0.4"
                  ></path>
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