<!-- ======= Navbar ======= -->
<div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
        <div class="row align-items-start">
            <div class="col-md-2">
                <ul class="custom-menu">
                    <?php
                    // Verificar si la sesión está iniciada
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }

                    if (isset($_SESSION['email'])) {
                        // Si el usuario ha iniciado sesión, enlazar a account.php
                        echo '<li><a href="index.php">INICIO</a></li>';
                    } else {
                        // Si el usuario no ha iniciado sesión, enlazar a index.php
                        echo '<li class="active"><a href="index.php">INICIO</a></li>';
                    }
                    ?>
                    <li><a href="perfil.php">PERFIL</a></li>
                    <li><a href="verOfertas.php">OFERTAS</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ======= Logo BUSCO ======= -->
<nav class="navbar navbar-light custom-navbar">
    <div class="container col-md-8 col-md-offset-8">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo-busco.png" alt="logo-busco" class="img-fluid" style="width: 300px; height: auto;">
        </a>
        <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
            <span></span>
        </a>
    </div>
</nav>