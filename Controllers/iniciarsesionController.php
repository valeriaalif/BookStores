<?php
include_once '../Models/iniciarsesionModel.php';

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

if(isset($_POST["btnIniciarSesion"]))
{
    $email = $_POST['emailInicio'];
    $contrasena = $_POST['contrasenaInicio'];

        $resultado = iniciarSesionModel($email, $contrasena);
    
        if ($resultado != null) {

            $_SESSION['nombre'] = $resultado['nombre'];
            $_SESSION['estado'] = $resultado['estado'];
            $_SESSION['email'] = $email;
    
            header('Location: ../Views/home.php');
            exit();
        } else {
            header('Location: ../Views/Login.php');
            echo 'Email o contraseña incorrectos';
        }
}

if(isset($_POST["btnCerrarSesion"]))
{
    session_destroy();
    header("Location: ../Views/Login.php");
}
?>