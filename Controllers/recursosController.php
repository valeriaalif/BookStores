<?php
    include_once '../Models/recursoModel.php';
    if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

function ConsultarRecursos() //TODOS
{

$recursos = ConsultarRecursosModel();

foreach ($recursos as $recurso){
    echo '<tr>';
        echo '<td>' . $recurso['RECURSO_ID'] . '</td>';
        echo '<td>' . $recurso['TIPO_RECURSO'] . '</td>';
        echo '<td>' . $recurso['URL'] . '</td>';
        echo "<td><a href='../Views/actualizarRecurso.php?q=" . $recurso['RECURSO_ID'] . "'>Actualizar</a> | 
             <a href='../Views/eliminarRecurso.php?q=" . $recurso['RECURSO_ID'] . "'>Eliminar</a>
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
    $TIPO_RECURSO = $_POST["tipo_recurso"];
    $URL = $_POST["url"];

$respuesta = ActualizarRecursoModel($RECURSO_ID, $TIPO_RECURSO, $URL);
    
    header("Location: ../Views/descargas.php");

}

if(isset($_POST["btnEliminarRecurso"])) {

    $RECURSO_ID = $_POST["recurso_id"];

    EliminarRecursoModel($RECURSO_ID);

    header("Location: ../Views/descargas.php");
}

if(isset($_POST["btnAgregarRecurso"]))
{
    $TIPO_RECURSO = $_POST["tipo_Recurso"];
    $URL = $_POST["url"];
    

    $respuesta = CrearRecursoModel($TIPO_RECURSO,  $URL);

    header("Location: ../Views/descargas.php");

}

?>