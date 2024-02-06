<?php
      include 'sesionON.php';
      include 'barraLogo.php';
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ofertas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/jquery/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header>
  <!-- ======= Navbar ======= -->
    
  </header>

  <main id="main">
    <?php
    
    if (!isset($_SESSION['email'])) {
      header("Location: index.php");
      exit();
    } 
    else if($_SESSION['admin']==0){
      header("Location: account.php");
      exit();
    }
    else {
      
      // '<!-- ======= Works Section ======= -->';
      //<!-- Sección de ofertas -->';
      echo '<section class="section services">';
      echo '  <div class="container">';
      echo '    <div class="row justify-content-center text-center mb-4">';
      echo '      <div class="col-5">';
      echo '        <h3 class="h3 heading">Ofertas</h3>';
      echo '        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newOfferModal" id="crearOfertaBtn">';
      echo '          Crear nueva oferta';
      echo '        </button>';
      echo '      </div>';
      echo '    </div>';
      echo '    <div class="row" id="contenedorOfertas">';
      echo '    </section>';
      //    <!-- Modal -->';
      echo '    <div class="modal fade" id="modalData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">';
      echo '      <div class="modal-dialog">';
      echo '        <div class="modal-content">';
      echo '          <div class="modal-header">';
      echo '            <h5 class="modal-title" id="staticBackdropLabel">Nueva Oferta</h5>';
      echo '            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
      echo '          </div>';
      echo '          <div class="modal-body">';
      echo '            <form action="creaOfertas.php" method="post">';
      echo '              <input type="hidden" value="0" id="txtIdOferta">';
      echo '              <div class="row">';
      echo '                <div class="col-sm-12">';
      echo '                  <div class="form-row">';
      echo '                    <div class="form-group col-sm-6">';
      echo '                      <label for="txtTitulo">Título</label>';
      echo '                      <input type="text" class="form-control form-control-sm" autocomplete="off" id="txtTitulo" name="TituloOferta">';
      echo '                    </div>';
      echo '                    <div class="form-group col-sm-6">';
      echo '                      <label for="txtSalario">Salario</label>';
      echo '                      <input type="text" class="form-control form-control-sm" autocomplete="off" id="txtSalario" name="SalarioOferta">';
      echo '                    </div>';
      echo '                    <div class="form-group col-sm-6">';
      echo '                      <label for="txtEspecialidad">Especialidad</label>';
      echo '                      <input type="text" class="form-control form-control-sm" autocomplete="off" id="txtEspecialidad" name="EspecialidadOferta">';
      echo '                    </div>';
      echo '                    <div class="form-group col-sm-12" row>';
      echo '                      <label for="txtDescripcion">Descripción</label>';
      echo '                      <input type="text" class="form-control form-control-sm" autocomplete="off" id="txtDescripcion" name="DescripcionOferta">';
      echo '                    </div>';
      echo '                  </div>';
      echo '                </div>';
      echo '              </div>';
      echo '              <div class="modal-footer">';
      echo '                <button class="btn btn-primary btn-sm" type="submit" id="btnGuardar">Guardar</button>';
      echo '                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>';
      echo '              </div>';
      echo '            </form>';
      echo '          </div>';
      echo '        </div>';
      echo '      </div>';
      echo '    </div>';
    }
    // <!-- End  Works Section -->';
    ?>
  </main>

  <!-- ======= Footer ======= -->
  <footer>
    <?php
      include 'footer.php';
      ?>
  </footer>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery-3.7.0.min.js"></script>
  <script src="assets/vendor/jquery/jquery-ui/jquery-ui.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/ofertas.js" defer></script>

</body>

</html>