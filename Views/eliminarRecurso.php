<?php
include_once 'layout.php';
include_once '../Controllers/recursosController.php';

$datos = ConsultarRecurso($_GET["q"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Book Store" name="keywords">
    <meta content="Book Store" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <form action="" method="post">
                    <div class="container">    
                    <h5 class="mb-4">¿Desea eliminar el siguiente producto?</h5>
                        <input type="hidden" id="recurso_id" name="recurso_id"
                                value="<?php echo $datos["RECURSO_ID"] ?>" >

                            <div class="row">

                                
                                </div>
                                

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" id="btnEliminarRecurso"
                                    name="btnEliminarRecurso" value="Eliminar" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <a class="btn btn-light" href="descargas.php" role="button">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>