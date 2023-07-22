<?php
include_once '../Models/proovedorModel.php';
if (session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
    
function ConsultarProovedorModel() //TODOS
{

$proovedor = ConsultarProovedorModel();

foreach ($proovedor as $proovedor){
    echo '<tr>';
        echo '<td>' . $proovedor['PROVEEDOR_ID'] . '</td>';
        echo '<td>' . $proovedor['NOMBRE_PROVEEDOR'] . '</td>';
        echo '<td>' . $proovedor['EMAIL'] . '</td>';
        echo '<td>' . $proovedor['TELEFONO'] . '</td>';
        echo "<td><a href='../Views/actualizarProovedor.php?q=" . $proovedor['PROVEEDOR_ID'] . "'>Actualizar</a> | 
             <a href='../Views/eliminarProovedor.php?q=" . $proovedor['PROVEEDOR_ID'] . "'>Eliminar</a>
             </td>";

    }
}

function ConsultarProovedor($PROVEEDOR_ID) {
    $datos = ConsultarProductosModel($PROVEEDOR_ID);
    if ($datos) {
        return $datos;
    } else {
        return null;
    }
}

if(isset($_POST["btnActualizarProovedor"]))
{
    
    $PRODUCTO_ID = $_POST["proovedor_id"];
    $NOMBRE_PRODUCTO = $_POST["nombre"];
    $PRECIO = $_POST["email"];
    $EXISTENCIAS = $_POST["telefono"];
$respuesta = ActualizarProovedorModel($PROVEEDOR_ID, $NOMBRE_PROVEEDOR,$EMAIL,$TELEFONO);
    
    header("Location: ../Views/Proovedor.php");

}

if(isset($_POST["btnEliminarProovedor"])) {

    $PROVEEDOR_ID = $_POST["proovedor_id"];

    EliminarProovedorModel($PROVEEDOR_ID);

    header("Location: ../Views/Proovedor.php");
}

if(isset($_POST["btnAgregarProovedor"]))
{
    $nombre = $_POST["nombre"];
    $precio = $_POST["email"];
    $existencias = $_POST["telefono"];
    

    $respuesta = CrearProovedorModel($nombre, $email, $telefono);

    header("Location: ../Views/Prooductor.php");

}

?>
