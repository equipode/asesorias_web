<!--SANTIAGO_ciclismo-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Compra</title>
    <link rel="icon" href="img/logo.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="datos, envio, descuento" name="keywords">
    <meta content="finalizar la compra" name="description">

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
            <div class="col md-12">
                <h1 align="center">Datos de la compra</h1><br><br>
            </div>
        </div>
    </div>

    <!-- Tabla de los datos de la compra -->

    <table style="width: 50%" align="center">

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

    </table><br><br>

    <div class="container">
        <div class="row">
            <div class="col md-6">
                <form name="datos">
                    <label for="N">
                        <FONT COLOR="black"><b>Cupon de descuento</b></FONT>
                    </label><br>
                    <input type="text" id="N" name="Nombre" size="30">
                </form><br>

                <!--Datos prsonales -->
                <FONT COLOR="black"><b>Datos personales</b></FONT>
                <br><br>
                <form name="Nombre">
                    <label for="N">
                        <FONT COLOR="black">Nombre</FONT>
                    </label><br>
                    <input type="text" id="N" name="Nombre" size="30">
                </form><br>

                <form name="email">
                    <label for="N">
                        <FONT COLOR="black">Email</FONT>
                    </label><br>
                    <input type="text" id="N" name="email" size="30">
                </form><br>

                <form name="tel">
                    <label for="N">
                        <FONT COLOR="black">Teléfono</FONT>
                    </label><br>
                    <input type="text" id="N" name="tel" size="30">
                </form><br>

                <form name="dirrecion">
                    <label for="N">
                        <FONT COLOR="black">Dirrecion</FONT>
                    </label><br>
                    <input type="text" id="N" name="dirrecion" size="30">
                </form><br>
            </div>

            <div class="col md-6">
                <form name="total">
                    <label for="N">
                        <FONT COLOR="black">Total:</FONT>
                    </label>
                    <input type="double" id="N" name="total" size="10">
                </form><br>

                <!-- Datos del envio -->
                <form name="Datos_envio">
                    <label for="N">
                        <FONT COLOR="black"><b>Datos del envio</b></FONT>
                    </label><br><br>
                    <input type="double" id="N" name="total" size="30"><br><br>
                    <input type="double" id="N" name="total" size="30"><br><br>
                    <input type="double" id="N" name="total" size="30"><br><br>
                    <input type="double" id="N" name="total" size="30"><br><br>
                </form>
            </div>
        </div>
    </div><br>

    <!-- Metodos de pago -->

    <div class="container">
        <div class="row">
            <div class="col md-6">
                <form name="Datos_envio">
                    <label for="N">
                        <FONT COLOR="black"><b>Metodos de pago</b></FONT>
                    </label><br><br>
                    <a class="btn btn-primary" href="#" role="button">Daviplata</a><br><br>
                    <a class="btn btn-primary" href="#" role="button">Davivienda</a>
                </form><br>

            </div>

            <div class="col md-6">
                <form name="Datos_envio">
                    <label for="N"></label><br><br><br>
                    <a class="btn btn-primary" href="#" role="button">Bancolombia</a><br><br>
                    <a class="btn btn-primary" href="#" role="button">PayPal</a><br><br>
                    <a class="btn btn-primary"
                        href="https://drive.google.com/file/d/1ejX0L-lvuc2bphGc6DdimpbuME8pDz2U/view?usp=sharing"
                        role="button">Pagar</a>
                </form><br>

            </div>

        </div>
    </div>
    <!-- formulario
    <div class="container">
        <div class="row">
            <div col md-12>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSckL2EZUKKLLt9fgJpoQ1N-UxhgrRvvF9ev9ZoGsft3vx139Q/viewform?embedded=true" width="640" height="691" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
            </div> 
        </div>
    </div>
            -->

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