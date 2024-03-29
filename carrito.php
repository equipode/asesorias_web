<!--SANTIAGO_Ciclismo-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Carrito</title>
    <link rel="icon" href="img/logo.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="descuento, cupon" name="keywords">
    <meta content="resumen de la compra" name="description">

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

            <div align="center" class="col md-12">
                <H1><b>Resumen de la compra</b></H1>
            </div>

        </div>
    </div>

    <!-- Resumen de la compra -->

    <div class="container">
        <div class="row">
            <div align="center" class="col md-12">
                <table style="width: 50%">
                    <tr>
                        <th>
                            <FONT COLOR="black"><b>Servicio</b></FONT>
                        </th>
                        <th>
                            <FONT COLOR="black"><b>Valor</b></FONT>
                        </th>
                        <th>
                            <FONT COLOR="black"><b>Descuento</b></FONT>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                         -->
                            Creamos todo tipo de sitio web
                        </td>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                        -->
                            200.000
                        </td>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                        -->
                            2.000
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                        -->
                            Le brindamos protección a tu sitio web
                        </td>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                        -->
                            80.000
                        </td>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                        -->
                            1000
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                        -->
                            Enlazamos tu sitio web con aliados estrátegicos
                        </td>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                        -->
                            60.000
                        </td>
                        <td>
                            <!--
                          <label for="N"></label>
                          <input type="text" id="N" name="Nombre" size="30">
                        -->
                            500
                        </td>

                    </tr>

                </table>
            </div>
        </div>
    </div> <br>

    <div class="container">
        <div class="row">
            <div class="col md-6">
                <form name="datos">
                    <label for="N">
                        <FONT COLOR="black">Cupon de descuento</FONT>
                    </label><br><br>
                    <input type="text" id="N" name="Nombre" size="30">
                </form><br><br>

                <label>
                    <FONT COLOR="black">Metodos de envio</FONT>
                </label><br><br>
                <select name="metodo">
                    <option value="1">Correo</option>
                    <option value="2">whatsApp</option>
                    <option value="3">Telegram</option>
                </select>
            </div><br>

            <div class="col md-6"><br>
                <form name="datos">
                    <label for="N">
                        <FONT COLOR="black">Total:</FONT>
                    </label>
                    <input type="double" id="N" name="Nombre" size="10">
                </form><br><br>
                <a class="btn btn-primary" href="compra_finalizar.php" role="button"
                    title="enlace a compra finalizar">Finalizar compra</a>
            </div>
        </div>
    </div>

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