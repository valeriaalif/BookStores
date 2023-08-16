<?php
include_once 'conexionModel.php';
include_once '../Controllers/proveedoresController.php';

function ConsultarProveedoresModel() {

    $conn = conectar();

    $query = "SELECT PROVEEDOR_ID, NOMBRE_PROVEEDOR, EMAIL,
    TELEFONO FROM PROVEEDOR";

    $result = oci_parse($conn, $query);
    oci_execute($result);


    $proveedor = array();
    while ($row = oci_fetch_assoc($result)) {
        $proveedor[] = $row;
    }

    oci_free_statement($result);
    oci_close($conn);

    return $proveedor;
}

function ConsultarProveedorModel($PROVEEDOR_ID) {

    $conn = conectar();

    $cursor = oci_new_cursor($conn);

    $stmt = oci_parse($conn, "BEGIN ConsultarProveedor(:pPROVEEDOR_ID, :pCursor); END;");
    oci_bind_by_name($stmt, ":pPROVEEDOR_ID", $PROVEEDOR_ID);
    oci_bind_by_name($stmt, ":pCursor", $cursor, -1, OCI_B_CURSOR);
    oci_execute($stmt);
    oci_execute($cursor);


    $proovedor = oci_fetch_array($cursor, OCI_ASSOC);


    oci_free_statement($stmt);
    oci_free_statement($cursor);
    oci_close($conn);

    return $proovedor;
}

function ActualizarProveedorModel($PROVEEDOR_ID, $NOMBRE_PROVEEDOR, $EMAIL, $TELEFONO) {
    $conn = conectar();
    $stmt = oci_parse($conn, "BEGIN ActualizarProveedor(:pPROVEEDOR_ID, :pNOMBRE_PROVEEDOR, :pEMAIL, :pTELEFONO); END;");

    oci_bind_by_name($stmt, ':pPROVEEDOR_ID', $PROVEEDOR_ID);
    oci_bind_by_name($stmt, ':pNOMBRE_PROVEEDOR', $NOMBRE_PROVEEDOR, 255);
    oci_bind_by_name($stmt, ':pEMAIL', $EMAIL, 255);
    oci_bind_by_name($stmt, ':pTELEFONO', $TELEFONO, 255);

    oci_execute($stmt);

    oci_free_statement($stmt);
    oci_close($conn);
}


function EliminarProveedorModel($PRODUCTO_ID) {

    $conn = conectar();

    $stmt = oci_parse($conn, "BEGIN eliminar_proveedor(:pPROVEEDOR_ID); END;");
    oci_bind_by_name($stmt, ":pPROVEEDOR_ID", $PRODUCTO_ID);
    oci_execute($stmt);
    oci_free_statement($stmt);
    oci_close($conn);
}

function CrearProveedorModel($nombre,$email,$telefono) {
  
    $conn = conectar();

    $sql = "INSERT INTO PROVEEDOR (NOMBRE_PROVEEDOR, EMAIL, TELEFONO)
        VALUES (:nombre, :email, :telefono)";

    // Preparar la consulta SQL
    $stmt = oci_parse($conn, $sql);

    // Asignar los valores a los parámetros de la consulta
    oci_bind_by_name($stmt, ':nombre', $nombre);
    oci_bind_by_name($stmt, ':email', $email);
    oci_bind_by_name($stmt, ':telefono', $telefono);

    // Ejecutar la consulta
    if (oci_execute($stmt)) {
    echo "El proovedor ha sido agregado correctamente";
    } else {
    echo "Ha ocurrido un error al agregar al proveedor";
    }
    oci_close($conn);
}


function ConsultarProveedorCardsModel() {

    $conn = conectar();

    $query = "SELECT      
                PROVEEDOR_ID,
                NOMBRE_PROVEEDOR,
                EMAIL,
                TELEFONO
              FROM PROVEEDOR";

    $result = oci_parse($conn, $query);
    oci_execute($result);

    $proveedor = array();
    while ($row = oci_fetch_assoc($result)) {
        $proveedor[] = $row;
    }

    oci_free_statement($result);
    oci_close($conn);

    return $proveedor;
}

?>
