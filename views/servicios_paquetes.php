<!--DIEGO-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Solartec - Renewable Energy Website Template</title>
    <link rel="icon" href="../img/logo.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../templates/solartec/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../templates/solartec/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../templates/solartec/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../templates/solartec/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../templates/solartec/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php 
    	include "includes/toplinks.php";
    ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php 
    	include "includes/menu.php";
    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php 
    	include "includes/slider.php";
    ?>
    <!-- Carousel End -->

    <!-- *********************************************** -->
    <!-- ZONA DE CONTENIDO --> 
    <!-- *********************************************** -->

    <!--Titulo Paquetes de servicios-->
    <div class="container">
		<div class="row">
			<div align="center" class="col-md-12">
				<h1><b>Paquetes de servicios</b></h1>
			</div>
		</div>
    </div><br>

    <!--Inicio Paquetes de Servicios--> 
    <div class="container">
		<div class="row">
			<div align="center" class="col-md-4">
            <img src="../img/basico.png" class="d-block w-100" alt="..." width="300" height="700">
            <a href="detalle_paquetes.php" class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
			</div>
            <div align="center" class="col-md-4">
            <img src="../img/popular.png" class="d-block w-100" alt="..." width="300" height="700">
            <a href="detalle_paquetes.php" class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
			</div>
            <div align="center" class="col-md-4">
            <img src="../img/modern.png" class="d-block w-100" alt="..." width="300" height="700">
            <a href="detalle_paquetes.php" class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
			</div>
		</div>
    </div><br>

    <div class="container">
		<div class="row">
			<div align="center" class="col-md-4">
            <img src="../img/premium.png" class="d-block w-100" alt="..." width="300" height="700">
            <a href="detalle_paquetes.php" class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
			</div>
            <div align="center" class="col-md-4">
            <img src="../img/dinamico.png" class="d-block w-100" alt="..." width="300" height="700">
            <a href="detalle_paquetes.php" class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
			</div>
            <div align="center" class="col-md-4">
            <img src="../img/business.png" class="d-block w-100" alt="..." width="300" height="700">
            <a href="detalle_paquetes.php" class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
			</div>
		</div>
    </div><br><br>
    <!--Fin Paquetes de servicios-->

    <!--Titulo Condiciones-->
    <div class="container">
		<div class="row">
			<div align="center" class="col-md-12">
				<h1><b>Condiciones</b></h1>
			</div>
		</div>
    </div><br>
    
    <!--Inicio de Condiciones-->
    <div class="container">
		<div class="row">
			<div class="col-md-6">
                <ul align="justify">
                    <li>Debe ser mayor de 18 años</li>
                    <li>Debe a hacer un adelanto del 30% para comenzar a desarrollar el sitio web</li>
                    <li>Debe digitar sus datos personales</li>
                    <li>El desarrollo de cada sitio web se tardará dependiendo de la complejidad deseada</li>
                    <li>En caso de agregar detalles adicionales a las páginas, avisar con anticipación y debe a hacer otro depósito además del acordado</li>
                </ul>
			</div>
            <div class="col-md-6">
                <ul align="justify">
                    <li>Elije tus métodos de pagos y tarifas de envíos </li>
                    <li>Se debe a hacer un contrato para empezar el desarrollo del sitio web</li>
                    <li>El uso de este sitio web y sus servicios, indica que aceptas los Términos de Uso</li>
                    <li>Tus datos de indentificación estaran protegidos</li>
                    <li>Solo tú eres responsable de tomar la decisión para que tu negocio crezca sin límites </li>
                </ul>
			</div>
        </div>
    </div>
    <!--Fin de Condiciones-->

    <!-- *********************************************** -->
    <!-- FIN ZONA DE CONTENIDO --> 
    <!-- *********************************************** -->

    <!-- Footer Start -->
    <?php 
    	include "includes/footer.php";
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../templates/solartec/lib/wow/wow.min.js"></script>
    <script src="../templates/solartec/lib/easing/easing.min.js"></script>
    <script src="../templates/solartec/lib/waypoints/waypoints.min.js"></script>
    <script src="../templates/solartec/lib/counterup/counterup.min.js"></script>
    <script src="../templates/solartec/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../templates/solartec/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../templates/solartec/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../templates/solartec/js/main.js"></script>
</body>

</html>