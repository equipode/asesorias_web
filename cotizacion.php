<!--ROBERT-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Cotizacion</title>
    <link rel="icon" href="img/logo.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="cotizar, servicios, contractar" name="keywords">
    <meta content="se cotiza los servicios a contractar" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="templates/solartec/lib/animate/animate.min.css" rel="stylesheet">
    <link href="templates/solartec/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="templates/solartec/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="templates/solartec/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="templates/solartec/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <?php 
    	include "views/includes/menu.php";
    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php 
    	include "views/includes/slider.php";
    ?>
    <!-- Carousel End -->

    <!-- *********************************************** -->
    <!-- ZONA DE CONTENIDO -->
    <!-- *********************************************** -->
    <div class="container">
        <div class="row">

            <div align="center" class="col-md-12">
                <h1><b>Cotización</b></h1>
            </div>

        </div>
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col md-6">
                <form>
                    <input type="text" size="40" maxlength="30" placeholder="Nombre y apellidos completos"><br><br>
                    <input type="text" size="40" maxlength="12" placeholder="Número de teléfono"><br><br>
                    <input type="text" size="40" maxlength="20" placeholder="Correo eletrónico"><br><br>

                    ¿Cuales son los servicios a contratar? ➡
                    <select name="Servicios a contratar" size="5" multiple>
                        <option>Asesoramiento para actualizar sitios web</option><br>
                        <option>Te capacitamos para dar un mejor manejo de tu sitio web</option><br>
                        <option>Le brindamos protección a tu sitio web</option><br>
                        <option>Creamos todo tipo de sitio web</option><br>
                        <option>Enlazamos tu sitio web con aliados estrátegicos</option>
                    </select><br>
            </div>
            <div class="d-none d-sm-block col md-6">
                <img src="img/asesor.jpg" class="d-block w-100" alt="..." width="300" height="350"><br>
            </div>
        </div>

        <a href="carrito.php" class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Enviar</a>

        <!-- *********************************************** -->
        <!-- FIN ZONA DE CONTENIDO -->
        <!-- *********************************************** -->

        <!-- Footer Start -->
        <?php 
    	include "views/includes/footer.php";
    ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="templates/solartec/lib/wow/wow.min.js"></script>
        <script src="templates/solartec/lib/easing/easing.min.js"></script>
        <script src="templates/solartec/lib/waypoints/waypoints.min.js"></script>
        <script src="templates/solartec/lib/counterup/counterup.min.js"></script>
        <script src="templates/solartec/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="templates/solartec/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="templates/solartec/lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="templates/solartec/js/main.js"></script>
</body>

</html>