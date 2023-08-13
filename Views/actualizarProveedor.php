<?php
include_once 'layout.php';
include_once '../Controllers/ProveedoresController.php';

$datos = ConsultarProveedor($_GET["q"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Book Store" name="keywords">
    <meta content="Book Store" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

</head>

<body>
    <?php
    MostrarNavbar();
    ?>

    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <section class="py-5 my-5">

                    <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                        <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="account" role="tabpanel"
                                aria-labelledby="account-tab">
                                <h3 class="mb-4">Actualizar Proveedor</h3>
                                <form action="" method="post">
                                    <div class="container">
                                        <input type="hidden" id="proveedor_id" name="proveedor_id"
                                            value="<?php echo $datos["PROVEEDOR_ID"] ?>">

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" id="nombre_prov"
                                                        name="nombre_prov" value="<?php echo $datos["NOMBRE_PROVEEDOR"] ?>">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Correo Electronico</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                         value="<?php echo $datos["EMAIL"] ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="proveedor_id"
                                                    name="proveedor_id" value="<?php echo $datos["PROVEEDOR_ID"] ?>">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefono</label>
                                                <input type="tel" class="form-control"
                                                    value="<?php echo $datos["TELEFONO"] ?>" id="telefono"
                                                    name="telefono">
                                            </div>
                                        </div>
                                    </div>
                            </div>


                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" id="btnActualizarProveedor"
                                        name="btnActualizarProveedor" value="Actualizar" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <a class="btn btn-light" href="proveedores.php" role="button">Cancelar</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>

    </div>
    </section>
    </div>



    <?php
    mostrarFooter();
    ?>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


    <script src="js/main.js"></script>

</body>

</html>