<?php
include_once 'layout.php';
include_once '../Controllers/productosController.php';
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
            <th>Código</th>
            <th>Nombre Producto</th>
            <th>Precio</th>
            <th>Existencias</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          ConsultarProductos();
          ?>
        </tbody>
      </table>
    </div>
  </section>
</div>

<div class="container2">
  <div class="agregar">
    <a class="BtnAgregarProd" href="agregarProducto.php">Agregar Producto</a>
  </div>
  <?php
  MostrarFooter();
  ?>