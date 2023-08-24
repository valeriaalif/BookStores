<?php
include_once 'layout.php';
include_once '../Controllers/VentasController.php';
?>

<?php
MostrarNavbar();
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Descripción Venta</th>
                    <th>Producto Vendido</th>
                    <th>Detalle</th>
                    <th>Acciones</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                  ConsultarVentas();
                ?>
            </tbody>
        </table>

      </div>
    </section>
  </div>

  <div class ="container2">
                    <div class= "agregar">
                    <a class="BtnAgregarVen" href="agregarVenta.php">Agregar Venta</a>
            </div>
<?php
MostrarFooter();
?>