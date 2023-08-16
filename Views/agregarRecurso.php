<?php
    include 'layout.php';
	include_once '../Controllers/recursosController.php'
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
			<h1 class="mb-5">Agregar un Recurso</h1>
			<form action="" method="post">
			    <div class="bg-white shadow rounded-lg d-block d-sm-flex">
				    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
					        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
						        <div class="container">
								        <div class="col-md-12">
									        <div class="form-group">
                                                <div class = "row">
										            <label>Nombre del Recurso</label>
                                                    <br>
                                                </div>
                                                <div class = "row">
										            <input type="text" required class="form-control" placeholder="Nombre" required id="nom" name="nom">
                                                </div>
									        </div>
	    							    </div>
                                        <div class="col-md-12">
									        <div class="form-group">
                                                <div class = "row">
										            <label>Tipo</label>
                                                    <br>
                                                </div>
                                                <div class = "row">
										            <input type="text" required class="form-control" placeholder="Tipo" required id="tipo_Recurso" name="tipo_Recurso">
                                                </div>
									        </div>
	    							    </div>
                                        <div class="col-md-12">
									        <div class="form-group">
                                                <div class = "row">
										            <label>Area</label>
                                                    <br>
                                                </div>
                                                <div class = "row">
										            <input type="text" required class="form-control" placeholder="Area" required id="area" name="area">
                                                </div>
									        </div>
	    							    </div>
                                        
	    						<div>
	    							<input type="submit" class="btn btn-primary" id="btnAgregarRecurso" name="btnAgregarRecurso" value="Agregar">
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