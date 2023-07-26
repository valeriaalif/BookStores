<?php
    include_once '../Models/proveedoresModel.php';
    if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

function ConsultarProveedores() //TODOS
{

$proveedores = ConsultarProveedoresModel();

foreach ($proveedores as $proveedores){
    echo '<tr>';
        echo '<td>' . $proveedores['PROVEEDOR_ID'] . '</td>';
        echo '<td>' . $proveedores['NOMBRE_PROVEEDOR'] . '</td>';
        echo '<td>' . $proveedores['EMAIL'] . '</td>';
        echo '<td>' . $proveedores['TELEFONO'] . '</td>';
        echo "<td><a href='../Views/actualizarProveedor.php?q=" . $proveedores['PROVEEDOR_ID'] . "'>Actualizar</a> | 
             <a href='../Views/eliminarProveedor.php?q=" . $proveedores['PROVEEDOR_ID'] . "'>Eliminar</a>
             </td>";
    echo '</tr>';
    }
}

function ConsultarProveedor($PROVEEDOR_ID)
 {
    $datos = ConsultarProveedorModel($PROVEEDOR_ID);
    if ($datos) {
        return $datos;
    } else {
        return null;
    }
}


if(isset($_POST["btnActualizarProveedor"]))
{
    
    $PROVEEDOR_ID = $_POST["proveedor_id"];
    $NOMBRE_PROVEEDOR = $_POST["nombre_prov"];
    $EMAIL = $_POST["email"];
    $TELEFONO = $_POST["telefono"];
$respuesta = ActualizarProveedorModel($PROVEEDOR_ID, $NOMBRE_PROVEEDOR,$EMAIL,$TELEFONO);
    
    header("Location: ../Views/Proveedores.php");

}

if(isset($_POST["btnEliminarProveedor"])) {

    $PROVEEDOR_ID = $_POST["proveedor_id"];

    EliminarProveedorModel($PROVEEDOR_ID);

    header("Location: ../Views/Proveedor.php");
}

if(isset($_POST["btnAgregarProveedor"]))
{
    $nombreProv = $_POST["nombre_provee"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    

    $respuesta = CrearProveedorModel($nombreProv, $email, $telefono);

    header("Location: ../Views/Proveedores.php");

}

?>