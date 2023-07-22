<?php
include_once 'ConexionModel.php';
include_once '../Controllers/proovedorController.php';

function ConsultarProovedoresModel() {

    $conn = conectar();

    $query = "SELECT PROVEEDOR_ID, NOMBRE_PROVEEDOR, EMAIL,
    TELEFONO FROM PROVEEDOR";

    $result = oci_parse($conn, $query);
    oci_execute($result);


    $proveedor = array();
    while ($row = oci_fetch_assoc($result)) {
        $tours[] = $row;
    }

    oci_free_statement($result);
    oci_close($conn);

    return $proveedor;
}

function ConsultarProovedorModel($PROVEEDOR_ID) {

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

function ActualizarProovedorModel($PROVEEDOR_ID, $NOMBRE_PROVEEDOR,$EMAIL, $TELEFONO)

{
    $conn = conectar();
    $stmt = oci_parse($conn, "BEGIN actualizar_transporte(:pPROVEEDOR_ID, :pNOMBRE_PROVEEDOR,:pEMAIL, :pTELEFONO, ); END;");

    oci_bind_by_name($stmt, ':pPROVEEDOR_ID', $PROVEEDOR_ID);
    oci_bind_by_name($stmt, ':pNOMBRE_PROVEEDOR', $NOMBRE_PROVEEDOR, 255);
    oci_bind_by_name($stmt, ':pEMAIL', $EMAIL, 255);
    oci_bind_by_name($stmt, ':pTELEFONO', $TELEFONO, 255);

    oci_execute($stmt);

    oci_free_statement($stmt);
    oci_close($conn);

}

function EliminarProovedorModel($PRODUCTO_ID) {

    $conn = conectar();

    $stmt = oci_parse($conn, "BEGIN eliminar_proovedor(:pPROVEEDOR_ID); END;");
    oci_bind_by_name($stmt, ":pPROVEEDOR_ID", $PRODUCTO_ID);
    oci_execute($stmt);
    oci_free_statement($stmt);
    oci_close($conn);
}

function CrearProovedorModel($nombre,$email,$telefono) {
  
    $conn = conectar();

    $sql = "INSERT INTO TOUR (NOMBRE_PROVEEDOR, EMAIL, TELEFONO)
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


function ConsultarProovedorCardsModel() {

    $conn = conectar();

    $query = "SELECT      
                PROVEEDOR_ID,
                NOMBRE_PROVEEDOR,
                EMAIL,
                TELEFONO
              FROM PROVEEDOR";

    $result = oci_parse($conn, $query);
    oci_execute($result);

    $proovedor = array();
    while ($row = oci_fetch_assoc($result)) {
        $proovedor[] = $row;
    }

    oci_free_statement($result);
    oci_close($conn);

    return $proovedor;
}

?>