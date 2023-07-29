<?php
include_once 'conexionModel.php';
include_once '../Controllers/recursoController.php';

function ConsultarRecursosModel() {

    $conn = conectar();

    $query = "SELECT RECURSO_ID, TIPO_RECURSO FROM RECURSO";
    $result = oci_parse($conn, $query);
    oci_execute($result);

    $recursos = array();
    while ($row = oci_fetch_assoc($result)) {
        $recursos[] = $row;
    }

    oci_free_statement($result);
    oci_close($conn);

    return $recursos;
}


function ConsultarRecursoModel($RECURSO_ID) {

    $conn = conectar();

    $cursor = oci_new_cursor($conn);

    $stmt = oci_parse($conn, "BEGIN ConsultarRecurso(:pRECURSO_ID, :pCursor); END;");
    oci_bind_by_name($stmt, ":pRECURSO_ID", $USUARIO_ID);
    oci_bind_by_name($stmt, ":pCursor", $cursor, -1, OCI_B_CURSOR);
    oci_execute($stmt);
    oci_execute($cursor);


    $recurso = oci_fetch_array($cursor, OCI_ASSOC);


    oci_free_statement($stmt);
    oci_free_statement($cursor);
    oci_close($conn);

    return $recurso;
}

function CrearRecursoModel($tipo_recurso, $url) {
    // Se establece la conexión a la base de datos
    $conn = conectar();

    // Se prepara la llamada al procedimiento almacenado
    $stmt = oci_parse($conn, 'BEGIN INSERTAR_RECURSO(:pe_tipo_recurso, :pe_url); END;');

    // Se definen los parámetros de entrada y salida
    oci_bind_by_name($stmt, ':pe_tipo_recurso', $tipo_recurso, 100);
    oci_bind_by_name($stmt, ':pe_url', $url, 1000);

    // Se ejecuta el procedimiento almacenado
    oci_execute($stmt);

    // Se liberan los recursos
    oci_free_statement($stmt);
    oci_close($conn);
}

function ActualizarRecursoModel($recurso_id, $tipo_recurso, $url)

{
    $conn = conectar();
    $stmt = oci_parse($conn, "BEGIN ActualizarRecurso(:pRECURSO_ID, :ptipo_recurso, :pUrl); END;");

    oci_bind_by_name($stmt, ':pRECURSO_ID', $usuario_id);
    oci_bind_by_name($stmt, ':pTIPO_RECURSO', $tipo_recurso, 255);
    oci_bind_by_name($stmt, ':pURL', $url, 1000);


    oci_execute($stmt);

    oci_free_statement($stmt);
    oci_close($conn);

}

function EliminarUsuarioModel($RECURSO_ID) {

    $conn = conectar();

    $stmt = oci_parse($conn, "BEGIN eliminar_recurso(:pRECURSO_ID); END;");
    oci_bind_by_name($stmt, ":pRECURSO_ID", $RECURSO_ID);
    oci_execute($stmt);
    oci_free_statement($stmt);
    oci_close($conn);
}


?>