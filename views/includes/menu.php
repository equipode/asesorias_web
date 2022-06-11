    <!-- estilo pa las tablas de la pagina carrito.php -->
<style type="text/css">

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

</style>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary">Asesorias web</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="Quienes_somos.php" class="nav-item nav-link">Quienes somos</a>
                <a href="contactos.php" class="nav-item nav-link">Contactos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="servicios.php" class="dropdown-item">Servicios</a>
                        <a href="detalle_servicios" class="dropdown-item">Detalle de servicios</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paquetes</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="servicios_paquetes.php" class="dropdown-item">Paquetes de servicios</a>
                        <a href="detalle_paquetes.php" class="dropdown-item">Detalle de paquetes</a>
                        <a href="carrito.php" class="dropdown-item">Carrito de compra</a>
                        <a href="cotizacion.php" class="dropdown-item">Cotizacion</a>
                        <a href="compra_finalizar.php" class="dropdown-item">Finalizar compra</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>