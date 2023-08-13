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
            <div class="row">
                <div class="col-md-9">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                ConsultarProveedores();
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <h4>Agregar Proveedor</h4>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="id_proveedor">ID</label>
                                <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre_provee">Nombre</label>
                                <input type="text" class="form-control" id="nombre_provee" name="nombre_provee" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="btnAgregarProveedor">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
MostrarFooter();
?>