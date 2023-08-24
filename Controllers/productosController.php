<?php
    include_once '../Models/productosModel.php';
    if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

function ConsultarProductos() //TODOS
{

$productos = ConsultarProductosModel();

foreach ($productos as $producto){
    echo '<tr>';
        echo '<td>' . $producto['PRODUCTO_ID'] . '</td>';
        echo '<td>' . $producto['NOMBRE_PRODUCTO'] . '</td>';
        echo '<td>' . $producto['PRECIO'] . '</td>';
        echo '<td>' . $producto['EXISTENCIAS'] . '</td>';
        echo "<td><a href='../Views/actualizarProducto.php?q=" . $producto['PRODUCTO_ID'] . "'>Actualizar</a> | 
             <a href='../Views/eliminarProducto.php?q=" . $producto['PRODUCTO_ID'] . "'>Eliminar</a>
             </td>";
    echo '</tr>';
    }
}

function ConsultarProducto($PRODUCTO_ID)
 {
    $datos = ConsultarProductoModel($PRODUCTO_ID);
    if ($datos) {
        return $datos;
    } else {
        return null;
    }
}


function ConsultarProductosCards() //TODOS
{

$productos = ConsultarProductosCardsModel();

foreach ($productos as $productos){

    echo "<div class='col-lg-4 col-md-6 mb-4'>
            <div class='package-item bg-white mb-2'>
                <img class='img-fluid' src='" . $producto['IMAGENURL'] . "' alt=''>
                <div class='p-4'>
                    <a class='h5 text-decoration-none' href=''>". $producto['NOMBRE_PRODUCTO'] ."</a>
                    <div class='border-top mt-4 pt-4'>
                        <div class='d-flex justify-content-between'>
                            <h6 class='m-0'><i class='fa fa-star text-primary mr-2'></i>". $producto['NOMBRE_PRODUCTO'] ."</h6>
                            <a href='../Views/single.php?q=" .$producto['producto_ID']. "' class='btn btn-primary mt-1'>Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }
}
if (isset($_POST["btnActualizarProducto"])) {
    $PRODUCTO_ID = $_POST["producto_id"];
    $NOMBRE_PRODUCTO = $_POST["nombre_producto"];
    $PRECIO = $_POST["precio"];
    $EXISTENCIAS = $_POST["existencias"];

    $respuesta = ActualizarProductoModel($PRODUCTO_ID, $NOMBRE_PRODUCTO, $PRECIO, $EXISTENCIAS);

    header("Location: productos.php");
}

if(isset($_POST["btnEliminarProducto"])) {

    $PRODUCTO_ID = $_POST["producto_id"];

    EliminarProductoModel($PRODUCTO_ID);

    header("Location: ../Views/productos.php");
}

if(isset($_POST["btnAgregarProducto"]))
{
    $nombre = $_POST["NombreProducto"];
    $precio = $_POST["Precio"];
    $existencias = $_POST["Existencias"];
    

    $respuesta = CrearProductoModel($nombre, $precio, $existencias);

    header("Location: ../Views/productos.php");

}

?>