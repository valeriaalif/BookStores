<?php
include_once '../Models/usuariosModel.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function ConsultarUsuarios()
{
    $usuarios = ConsultarUsuariosModel();

    foreach ($usuarios as $usuario) {
        echo '<tr>';
        echo '<td>' . $usuario['EMAIL'] . '</td>';
        echo '<td>' . $usuario['NOMBRE'] . '</td>';
        echo '<td>' . $usuario['ESTADO'] . '</td>';
        echo '<td>' . $usuario['TIPO_USUARIO'] . '</td>';
        echo "<td><a href='../Views/actualizarUsuario.php?q=" . $usuario['USUARIO_ID'] . "'>Actualizar</a> | 
             <a href='../Views/eliminarUsuario.php?q=" . $usuario['USUARIO_ID'] . "'>Eliminar</a>
             </td>";
        echo '</tr>';
    }
}

function ConsultarUsuario($USUARIO_ID)
{
    $datos = ConsultarUsuarioModel($USUARIO_ID);
    if ($datos) {
        return $datos;
    } else {
        return null;
    }
}

if (isset($_POST["btnRegistrarse"])) {
    $email = $_POST['emailRegistro'];
    $contrasena = $_POST['contrasena'];
    $nombre = $_POST['nombre'];
    $tipoUsuario = $_POST['tipo_usuario'];

    $respuesta = CrearUsuarioModel($email, $contrasena, $nombre, $tipoUsuario);

    header("Location: ../Views/home.php");
    exit(); // Agregamos esta línea para detener la ejecución después de la redirección
}

if (isset($_POST["btnActualizarUsuario"])) {
    $usuario_id = $_POST["usuario_id"];
    $contrasena = $_POST["contrasena"];
    $nombre = $_POST["nombre"];
    $perfil = $_POST["perfil"];

    $respuesta = ActualizarUsuarioModel($usuario_id, $nombre, $perfil, $contrasena);

    if ($respuesta == true) {
        header("Location: ../Views/Usuarios.php");
        exit(); // Agregamos esta línea para detener la ejecución después de la redirección
    }
}

if (isset($_POST["btnEliminarUsuario"])) {
    $USUARIO_ID = $_POST["usuario_id"];
    EliminarUsuarioModel($USUARIO_ID);
    header("Location: ../Views/Usuarios.php");
    exit(); // Agregamos esta línea para detener la ejecución después de la redirección
}
?>

