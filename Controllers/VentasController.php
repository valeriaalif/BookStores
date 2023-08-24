<?php
include_once '../Models/VentasModel.php';


function ConsultarVentas()
{
    $ventas = ConsultarVentasModel();

    foreach ($ventas as $venta) {
        echo '<tr>';
        echo '<td>' . $venta['DESC_VENTA'] . '</td>';
        echo '<td>' . $venta['PROD_VENDIDO'] . '</td>';
        echo '<td>' . $venta['DETALLE'] . '</td>';
        echo "<td><a href='../Views/actualizarVenta.php?q=" . $venta['VENTA_ID'] . "'>Actualizar</a> | 
             <a href='../Views/eliminarVenta.php?q=" . $venta['VENTA_ID'] . "'>Eliminar</a>
             </td>";
        echo '</tr>';
    }
}


function ConsultarVenta($VENTA_ID)
{
    $datos = ConsultarVentaModel($VENTA_ID);
    if ($datos) {
        return $datos;
    } else {
        return null;
    }
}


if (isset($_POST["btnActualizarVenta"])) {
    $VENTA_ID = $_POST["venta_id"];
    $DESC_VENTA = $_POST["desc_venta"];
    $PROD_VENDIDO = $_POST["prod_vendido"];
    $DETALLE = $_POST["detalle"];

    $respuesta = ActualizarVentaModel($VENTA_ID, $DESC_VENTA, $PROD_VENDIDO, $DETALLE);

    header("Location: ventas.php");
}

if (isset($_POST["btnEliminarVenta"])) {

    $VENTA_ID = $_POST["venta_id"];

    EliminarVentaModel($VENTA_ID);

    header("Location: ../Views/ventas.php");
    exit(); 
}

if (isset($_POST["btnAgregarVenta"])) {
    $desc_venta = $_POST["desc_venta"];
    $prod_vendido = $_POST["prod_vendido"];
    $detalle = $_POST["detalle"];


    $respuesta = CrearVentaModel($desc_venta, $prod_vendido, $detalle);

    header("Location: ../Views/ventas.php");

}

?>