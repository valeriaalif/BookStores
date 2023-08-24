<?php
include_once 'layout.php';
include_once '../Controllers/recursosController.php';
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
                    <th>ID</th>
                    <th>Tipo Recurso</th>
                    <th>URL</th>
                    <th>Acciones</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                  ConsultarRecursos();
                ?>
            </tbody>
        </table>

      </div>
    </section>
  </div>
  
  <div class ="container2">
                    <div class= "agregar">
                    <a class="BtnAgregarProd" href="agregarRecurso.php">Agregar Recurso</a>
            </div>
<?php
MostrarFooter();
?>