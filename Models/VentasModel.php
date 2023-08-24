<?php
include_once 'conexionModel.php';
include_once '../Controllers/VentasController.php';

function ConsultarVentasModel() {

    $conn = conectar();

    $query = "SELECT VENTA_ID, DESC_VENTA, PROD_VENDIDO,
    DETALLE FROM VENTAS";

    $result = oci_parse($conn, $query);
    oci_execute($result);


    $venta = array();
    while ($row = oci_fetch_assoc($result)) {
        $venta[] = $row;
    }

    oci_free_statement($result);
    oci_close($conn);

    return $venta;
}

function ConsultarVentaModel($VENTA_ID) {

    $conn = conectar();

    $cursor = oci_new_cursor($conn);

    $stmt = oci_parse($conn, "BEGIN ConsultarVenta(:pVENTA_ID, :pCursor); END;");
    oci_bind_by_name($stmt, ":pVENTA_ID", $VENTA_ID);
    oci_bind_by_name($stmt, ":pCursor", $cursor, -1, OCI_B_CURSOR);
    oci_execute($stmt);
    oci_execute($cursor);


    $venta = oci_fetch_array($cursor, OCI_ASSOC);


    oci_free_statement($stmt);
    oci_free_statement($cursor);
    oci_close($conn);

    return $venta;
}

function ActualizarVentaModel($VENTA_ID, $DESC_VENTA, $PROD_VENDIDO, $DETALLE) {
    $conn = conectar();
    $stmt = oci_parse($conn, "BEGIN ACTUALIZARVENTA(:pVENTA_ID, :pDESC_VENTA, :pPROD_VENDIDO, :pDETALLE); END;");

    oci_bind_by_name($stmt, ':pVENTA_ID', $VENTA_ID);
    oci_bind_by_name($stmt, ':pDESC_VENTA', $DESC_VENTA, 255);
    oci_bind_by_name($stmt, ':pPROD_VENDIDO', $PROD_VENDIDO, 255);
    oci_bind_by_name($stmt, ':pDETALLE', $DETALLE, 255);

    oci_execute($stmt);

    oci_free_statement($stmt);
    oci_close($conn);
}


function EliminarVentaModel($VENTA_ID) {

    $conn = conectar();

    $stmt = oci_parse($conn, "BEGIN eliminar_venta(:pVENTA_ID); END;");
    oci_bind_by_name($stmt, ":pVENTA_ID", $VENTA_ID);
    oci_execute($stmt);
    oci_free_statement($stmt);
    oci_close($conn);
}

function CrearVentaModel($desc_venta,$prod_vendido,$detalle) {
  
    $conn = conectar();

    $sql = "INSERT INTO VENTAS (DESC_VENTA, PROD_VENDIDO, DETALLE)
        VALUES (:pdesc_venta, :pprod_vendido, :pdetalle)";

    // Preparar la consulta SQL
    $stmt = oci_parse($conn, $sql);

    // Asignar los valores a los parámetros de la consulta
    oci_bind_by_name($stmt, ':pdesc_venta', $desc_venta);
    oci_bind_by_name($stmt, ':pprod_vendido', $prod_vendido);
    oci_bind_by_name($stmt, ':pdetalle', $detalle);

    // Ejecutar la consulta
    if (oci_execute($stmt)) {
    echo "La venta ha sido agregada correctamente";
    } else {
    echo "Ha ocurrido un error al agregar la venta";
    }
    oci_close($conn);
}



?>
