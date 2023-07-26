<?php
    include_once '../Models/proveedoresModel.php';
    if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

function ConsultarRecursos() //TODOS
{

$recursos = ConsultarRecursosModel();

foreach ($recursos as $recursos){
    echo '<tr>';
        echo '<td>' . $recursos['RECURSO_ID'] . '</td>';
        echo '<td>' . $recursos['TIPO_RECURSO'] . '</td>';
        echo '<td>' . $recursos['URL'] . '</td>';
        echo "<td><a href='../Views/actualizarRecurso.php?q=" . $recursos['RECURSO_ID'] . "'>Actualizar</a> | 
             <a href='../Views/eliminarRecurso.php?q=" . $recursos['RECURSO_ID'] . "'>Eliminar</a>
             </td>";
    echo '</tr>';
    }
}

function ConsultarRecurso($RECURSO_ID)
 {
    $datos = ConsultarRecursoModel($RECURSO_ID);
    if ($datos) {
        return $datos;
    } else {
        return null;
    }
}


if(isset($_POST["btnActualizarRecurso"]))
{
    
    $RECURSO_ID = $_POST["recurso_id"];
    $TIPO_RECURSO = $_POST["tipo_rec"];
    $URL = $_POST["url"];
$respuesta = ActualizarRecursoModel($RECURSO_ID, $TIPO_RECURSO,$URL);
    
    header("Location: ../Views/Recursos.php");

}

if(isset($_POST["btnEliminarRecurso"])) {

    $RECURSO_ID = $_POST["recurso_id"];

    EliminarProductoModel($RECURSO_ID);

    header("Location: ../Views/Recursos.php");
}

if(isset($_POST["btnAgregarRecurso"]))
{
    $tipoRec = $_POST["tipo_Rec"];
    $enlace= $_POST["url"];
    

    $respuesta = CrearProductoModel($tipoRec, $enlace);

    header("Location: ../Views/Recursos.php");

}

?>