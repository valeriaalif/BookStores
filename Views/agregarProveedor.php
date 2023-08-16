<?php
    include 'layout.php';
	include_once '../Controllers/proveedoresController.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Producto</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>

<body>

<?php
        MostrarNavBar();
    ?>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Agregar un proveedor</h1>
			<form action="" method="post">
			    <div class="bg-white shadow rounded-lg d-block d-sm-flex">
				    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
					        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
						        <div class="container">
								        <div class="col-md-12">
									        <div class="form-group">
                                                <div class = "row">
										            <label>Nombre del Proveedor</label>
                                                    <br>
                                                </div>
                                                <div class = "row">
										            <input type="text" required class="form-control" placeholder="Nombre" required id="nombre_provee" name="nombre_provee">
                                                </div>
									        </div>
	    							    </div>
                                        <div class="col-md-12">
									        <div class="form-group">
                                                <div class = "row">
										            <label>Email</label>
                                                    <br>
                                                </div>
                                                <div class = "row">
										            <input type="email" required class="form-control" placeholder="Email" required id="email" name="email">
                                                </div>
									        </div>
	    							    </div>
                                        <div class="col-md-12">
									        <div class="form-group">
                                                <div class = "row">
										            <label>Telefono</label>
                                                    <br>
                                                </div>
                                                <div class = "row">
										            <input type="text" required class="form-control" placeholder="Telefono" required id="telefono" name="telefono">
                                                </div>
									        </div>
	    							    </div>
                                        
	    						<div>
	    							<input type="submit" class="btn btn-primary" id="btnAgregarProveedor" name="btnAgregarProveedor" value="Agregar">
	    						</div>
                                <br>
	    				    </div>    
	    				</div>	
	    			</div>				
	    		</div> 	
            </form>		
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>