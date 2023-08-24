<?php
include_once 'layout.php';
include_once '../Controllers/ProveedoresController.php';
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
                    <th>Nombre Proveedor</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Acciones</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                 ConsultarProveedores();
                ?>
            </tbody>
        </table>

      </div>
    </section>
  </div>

  <div class ="container2">
                    <div class= "agregar">
                    <a class="BtnAgregarProv" href="agregarProveedor.php">Agregar Proveedor</a>
            </div>
<?php
MostrarFooter();
?>