<?php
include_once 'layout.php';
include_once '../Controllers/usuariosController.php';
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
                    <th>Correo Electrónico</th>
                    <th>Nombre</th>
                    <th>Identificación</th>
                    <th>Tipo Usuario</th>
                    <th>Acciones</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                  ConsultarUsuarios();
                ?>
            </tbody>
        </table>

      </div>
    </section>
  </div>
<?php
MostrarFooter();
?>
