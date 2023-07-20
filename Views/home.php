<?php
include_once 'layout.php';
?>

<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <title>BookCorner</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="css/principal.css" rel="stylesheet">

    <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
       <!--font-awesome.min.css-->
       <link rel="stylesheet" href="assets/css/font-awesome.min.css">

       <!--linear icon css-->
       <link rel="stylesheet" href="assets/css/linearicons.css">

       <!--animate.css-->
       <link rel="stylesheet" href="assets/css/animate.css">
       
       
       <!--style.css-->
       <link rel="stylesheet" href="assets/css/content.css">
       
       <!--responsive.css-->
       <link rel="stylesheet" href="assets/css/responsive.css">
       
</head>

<body>

<?php
MostrarNavbar();
?>

    <div class="container-xxl bg-white p-0">

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="min-height: 300px;">
                        <img class="position-relative w-100" src="Img/atomic-habits-banner.png" style="min-height: 300px; object-fit: cover;" alt="Image">
                    </div>
                    <div class="carousel-item" style="min-height: 300px;">
                        <img class="position-relative w-100" src="Img/six-banner.jpg" style="min-height: 300px; object-fit: cover;" alt="Image">
                     
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                        <img class="w-100" src="Img/summer-2.png" style="min-height: 300px; object-fit: cover;" alt="Image">
                       
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--Carousel End -->

        <!--populer-products start -->
		<section id="populer-products" class="populer-products">
			<div class="container">
				<div class="populer-products-content">
					<div class="row">
						<div class="col-md-3">
							<div class="single-populer-products">
								<div class="single-populer-product-img mt40">
									<img src="assets/images/populer-products/El-Codigo-Da-Vinci.jpg" style="width: 216px;height: 331px;" alt="populer-products images">
								</div>
								<h2><a href="#">Código Da Vinci</a></h2>
								<div class="single-populer-products-para">
									<p>Un asesinato en el Museo del Louvre de París y pistas crípticas en algunas de las pinturas más famosas de Leonardo da 
										Vinci conducen al descubrimiento de un misterio religioso. Durante 2.000 años, una sociedad secreta guarda de cerca la información que, 
										si saliera a la luz, podría sacudir los cimientos mismos del cristianismo.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-populer-products">
								<div class="single-inner-populer-products">
									<div class="row">
										<div class="col-md-4 col-sm-12">
											<div class="single-inner-populer-product-img">
												<img src="assets/images/populer-products/cumbres.jpg" style="width: 150px;height: 190px;" alt="populer-products images">
											</div>
										</div>
										<div class="col-md-8 col-sm-12">
											<div class="single-inner-populer-product-txt">
												<h2>
													<a href="#">
														Descubre los clásicos
													</a>
												</h2>
												<p>
													Descubre el mundo de los clásicos y adéntrate a una aventura espectacular.
												</p>
												<div class="populer-products-price">
													<h4>Los Descuentos empiezan desde <span>$99.00</span></h4>
												</div>
												<button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='#'">
													Explorar más
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="single-populer-products">
								<div class="single-populer-products">
									<div class="single-populer-product-img">
										<img src="assets/images/populer-products/conde-montecristo.jpg" alt="populer-products images">
									</div>
									<h2><a href="#">Conde Montecristo</a></h2>
									<div class="single-populer-products-para">
										<p>El Conde de Montecristo es una novela de aventuras escrita por el autor francés Alexandre Dumas y terminada en 1844.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.populer-products-->
		<!--populer-products end-->

		<!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Nueva Colección</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/divergente.jpg" style="width: 150px;height: 190px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									
								</div>
								<h4><a href="#">Divergente</a></h4>
								<p class="arrival-product-price">$15.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/corredor.jpg" style="width: 150px;height: 190px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-2">
										<p>sale</p>
									</div>
									
								</div>
								<h4><a href="#">El Corredor del Laberinto</a></h4>
								<p class="arrival-product-price">$25.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/juegos-hambre.jpg" style="width: 150px;height: 190px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									
								</div>
								<h4><a href="#">Los Juegos del Hambre</a></h4>
								<p class="arrival-product-price">$40.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/dador.jpg" style="width: 150px;height: 190px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									
								</div>
								<h4><a href="#">El Dador</a></h4>
								<p class="arrival-product-price">$23.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/anillos.jpg" style="width: 150px;height: 190px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									
								</div>
								<h4><a href="#">El Señor de los Anillos</a></h4>
								<p class="arrival-product-price">$50.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/dune.png" style="width: 150px;height: 190px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									
								</div>
								<h4><a href="#">Dune</a></h4>
								<p class="arrival-product-price">$45.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/pistolero.jpg" style="width: 150px;height: 190px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-2">
										<p>sale</p>
									</div>
									
								</div>
								<h4><a href="#">El Pistolero</a></h4>
								<p class="arrival-product-price">$55.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/collection/seis.jpg" style="width: 150px;height: 190px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									
								</div>
								<h4><a href="#">Seis de Cuervos</a></h4>
								<p class="arrival-product-price">$30.00</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->

		
		<!--feature start -->
		<section id="feature" class="feature">
			<div class="container">
				<div class="section-header">
					<h2>Sagas Aclamadas</h2>
				</div><!--/.section-header-->
				<div class="feature-content">
					<div class="row">
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="assets/images/features/harry.jpg" style="width: 310px;height: 310px;" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">Harry Potter</a></h3>
									<h5>$160.00</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="assets/images/features/cazadores.jpg" style="width: 310px;height: 310px;" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">Cazadores de Sombras</a></h3>
									<h5>$200.00</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="assets/images/features/100.jpg" style="width: 310px;height: 310px;" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">Los 100</a></h3>
									<h5>$100.00</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="assets/images/features/juego-tronos.jpg" style="width: 310px;height: 310px;" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">Juego de Tronos</a></h3>
									<h5>$299.00</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.feature-->
		<!--feature end -->

		<!--blog start -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>Nuestros Artículos</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/estudio.jpg" style="width: 2050px;height: 250px;"alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">La importancia de la responsabilidad</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
							
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/journal.jpg" style="width: 2050px;height: 250px;" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">¿Cómo empezar un diario siendo terapia?</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/b3.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#"> ¿Cómo aprovechar su tiempo al máximo?</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->

		<!-- clients strat -->
		<section id="clients"  class="clients">
			<div class="container">
				<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/logo-1.jpg" style="width: 150px;height: 150px;"alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/logo-2.png" style="width: 150px;height: 150px;" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/logo-3.jpg" style="width: 150px;height: 150px;" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/logo-4.png" style="width: 150px;height: 150px;" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/logo-6.png"  style="width: 150px;height: 150px;"alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->

			</div><!--/.container-->

		</section><!--/.clients-->	
		<!-- clients end -->

		<!--newsletter strat -->
		
		<?php
        MostrarFooter();

        ?>
		
</div>
</div>





		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/template.min.js"></script>
		
	   
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        



 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>