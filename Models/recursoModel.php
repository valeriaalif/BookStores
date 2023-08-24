<?php
include_once 'conexionModel.php';
include_once '../Controllers/recursosController.php';

function ConsultarRecursosModel() {

    $conn = conectar();

    $query = "SELECT RECURSO_ID, TIPO_RECURSO, URL FROM RECURSO";
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
    oci_bind_by_name($stmt, ":pRECURSO_ID", $RECURSO_ID);
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

    $sql = "INSERT INTO RECURSO ( URL)
    VALUES (:url)";


     // Preparar la consulta SQL
     $stmt = oci_parse($conn, $sql);

    // Se definen los parámetros de entrada y salida
    oci_bind_by_name($stmt, ':tipo_recurso', $tipo_recurso);
    oci_bind_by_name($stmt, ':url', $url);

    // Ejecutar la consulta
    if (oci_execute($stmt)) {
        echo "El producto ha sido agregado correctamente";
        } else {
        echo "Ha ocurrido un error al agregar el producto";
        }
        oci_close($conn);
}

function ActualizarRecursoModel($recurso_id, $tipo_recurso, $url)

{
    $conn = conectar();
    $stmt = oci_parse($conn, "BEGIN ACTUALIZARRECURSO(:precurso_id,:ptipo_recurso, :purl); END;");

    oci_bind_by_name($stmt, ':precurso_id', $recurso_id);
    oci_bind_by_name($stmt, ':ptipo_recurso', $tipo_recurso, 255);
    oci_bind_by_name($stmt, ':purl', $url, 255);


    oci_execute($stmt);

    oci_free_statement($stmt);
    oci_close($conn);

}

function EliminarRecursoModel($RECURSO_ID) {

    $conn = conectar();

    $stmt = oci_parse($conn, "BEGIN eliminar_recurso(:pRECURSO_ID); END;");
    oci_bind_by_name($stmt, ":pRECURSO_ID", $RECURSO_ID);
    oci_execute($stmt);
    oci_free_statement($stmt);
    oci_close($conn);
}


?>