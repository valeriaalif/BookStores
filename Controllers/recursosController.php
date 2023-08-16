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
        echo '<td>' . $recurso['NOMBRE_RECURSO'] . '</td>';
        echo '<td>' . $recurso['TIPO_RECURSO'] . '</td>';
        echo '<td>' . $recurso['AREA'] . '</td>';
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
    $NOMBRE_RECURSO = $_POST["nom"];
    $TIPO_RECURSO = $_POST["tipo_rec"];
    $AREA = $_POST["area"];

$respuesta = ActualizarRecursoModel($RECURSO_ID, $NOMBRE_RECURSO, $TIPO_RECURSO,$AREA);
    
    header("Location: ../Views/descargas.php");

}

if(isset($_POST["btnEliminarRecurso"])) {

    $RECURSO_ID = $_POST["recurso_id"];

    EliminarRecursoModel($RECURSO_ID);

    header("Location: ../Views/descargas.php");
}

if(isset($_POST["btnAgregarRecurso"]))
{
    $NOMBRE_RECURSO = $_POST["nom"];
    $TIPO_RECURSO = $_POST["tipo_Recurso"];
    $AREA = $_POST["area"];
    

    $respuesta = CrearRecursoModel( $NOMBRE_RECURSO,$TIPO_RECURSO,  $AREA);

    header("Location: ../Views/descargas.php");

}

?>