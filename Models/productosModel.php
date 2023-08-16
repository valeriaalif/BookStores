<?php
include_once 'conexionModel.php';
include_once '../Controllers/productosController.php';

function ConsultarProductosModel() {

    $conn = conectar();

    $query = "SELECT PRODUCTO_ID, NOMBRE_PRODUCTO, PRECIO,
    EXISTENCIAS FROM PRODUCTO";

    $result = oci_parse($conn, $query);
    oci_execute($result);


    $productos = array();
    while ($row = oci_fetch_assoc($result)) {
        $productos[] = $row;
    }

    oci_free_statement($result);
    oci_close($conn);

    return $productos;
}

function ConsultarProductoModel($PRODUCTO_ID) {

    $conn = conectar();

    $cursor = oci_new_cursor($conn);

    $stmt = oci_parse($conn, "BEGIN ConsultarProducto(:pPRODUCTO_ID, :pCursor); END;");
    oci_bind_by_name($stmt, ":pPRODUCTO_ID", $PRODUCTO_ID);
    oci_bind_by_name($stmt, ":pCursor", $cursor, -1, OCI_B_CURSOR);
    oci_execute($stmt);
    oci_execute($cursor);


    $producto = oci_fetch_array($cursor, OCI_ASSOC);


    oci_free_statement($stmt);
    oci_free_statement($cursor);
    oci_close($conn);

    return $producto;
}

function ActualizarProductoModel($PRODUCTO_ID, $NOMBRE_PRODUCTO,$PRECIO, $EXISTENCIAS)

{
    $conn = conectar();
    $stmt = oci_parse($conn, "BEGIN ActualizarProducto(:pPRODUCTO_ID, :pNOMBRE_PRODUCTO,:pPRECIO, :pEXISTENCIAS, ); END;");

    oci_bind_by_name($stmt, ':pPRODUCTO_ID', $PRODUCTO_ID);
    oci_bind_by_name($stmt, ':pNOMBRE_PRODUCTO', $NOMBRE_PRODUCTO, 255);
    oci_bind_by_name($stmt, ':pPRECIO', $PRECIO, 255.00);
    oci_bind_by_name($stmt, ':pEXISTENCIAS', $EXISTENCIAS, 255);

    oci_execute($stmt);

    oci_free_statement($stmt);
    oci_close($conn);

}

function EliminarProductoModel($PRODUCTO_ID) {

    $conn = conectar();

    $stmt = oci_parse($conn, "BEGIN eliminar_producto(:pPRODUCTO_ID); END;");
    oci_bind_by_name($stmt, ":pPRODUCTO_ID", $PRODUCTO_ID);
    oci_execute($stmt);
    oci_free_statement($stmt);
    oci_close($conn);
}

function CrearProductoModel($nombre,$precio,$existencias) {
  
    $conn = conectar();

    $sql = "INSERT INTO PRODUCTO (NOMBRE_PRODUCTO, PRECIO, EXISTENCIAS)
        VALUES (:nombre, :precio, :existencias)";

    // Preparar la consulta SQL
    $stmt = oci_parse($conn, $sql);

    // Asignar los valores a los parámetros de la consulta
    oci_bind_by_name($stmt, ':nombre', $nombre);
    oci_bind_by_name($stmt, ':precio', $precio);
    oci_bind_by_name($stmt, ':existencias', $existencias);

    // Ejecutar la consulta
    if (oci_execute($stmt)) {
    echo "El producto ha sido agregado correctamente";
    } else {
    echo "Ha ocurrido un error al agregar el producto";
    }
    oci_close($conn);
}


function ConsultarProductosCardsModel() {

    $conn = conectar();

    $query = "SELECT      
                PRODUCTO_ID,
                NOMBRE_PRODUCTO,
                PRECIO,
                EXISTENCIAS
              FROM PRODUCTO";

    $result = oci_parse($conn, $query);
    oci_execute($result);

    $productos = array();
    while ($row = oci_fetch_assoc($result)) {
        $productos[] = $row;
    }

    oci_free_statement($result);
    oci_close($conn);

    return $productos;
}

?>