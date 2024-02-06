<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perfil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header>
  <?php
        include 'sesionON.php';
        include 'barraLogo.php';
        ?>
   </header>

  <main id="main">
    <!-- ======= Works Section ======= -->
    <?php
             if(!isset($_SESSION['email'])) {
              header("Location: index.php");
              exit();
          } else {
              // La sesión está activa, puedes realizar otras acciones aquí si es necesario
             
            include_once 'dbConnection.php';  
                $consulta = "SELECT email, name, gender,mob,img,admin FROM user WHERE email = '" . $_SESSION['email'] . "'";
                $result = mysqli_query($con, $consulta);
            echo'<div class="row" style="margin-left: 20px; margin-top: 10px;">';
            while ($row = mysqli_fetch_assoc($result)) {
              echo'<div class="card" id="cartaUsuario" margin: 20px">';
              echo'  <div class="card-body">';
              if (isset($row['img']) && $row['img'] !== NULL){
                echo'  <img class="card-img-top" style="width: 20%; height: 20vw; margin-top: 10px;" src="assets/img/'.$row['img'].'" alt="Card image">';
              }
              else{
                echo' <img class="card-img-top" style="width: 20%; height: 20vw; margin-top: 10px;" src="assets\img\defaultUser.jpg" alt="default">';
                echo' <form action="añadirImg.php" method="post" enctype="multipart/form-data">';
                echo' <input type="file" id="img" name="img">';
                echo' <input type="submit" value="CargarImg">';
              }
              echo'    <h4 class="card-title">Nombre:'.$row['name'].'</h4>';
              echo'     <h5 class="card-title">Email:'.$row['email'].'</h4>';
              echo'     <h5 class="card-title">Genero:'.$row['gender'].'</h4>';
              echo'     <h5 class="card-title">Movil:'.$row['mob'].'</h4>';
              if ($row['admin'] == true) {
              echo '<form action="ofertas.php" method="post" enctype="multipart/form-data">';
              echo '  <button type="button" class="btn btn-primary" onclick="window.location.href=\'ofertas.php\'">Añadir oferta</button>';
              echo '</form>';
              }
              if ($row['admin'] == false) {
                echo '<form action="misOfertas.php" method="post" enctype="multipart/form-data">';
                echo '  <button type="button" class="btn btn-primary" onclick="window.location.href=\'misOfertas.php\'">Ver mis ofertas</button>';
                echo '</form>';
                }
              echo'  </div>';
              echo'</div>';
            }
            echo'</div>';
            mysqli_close($con);
          }
            ?>



    </section><!-- End  Works Section -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright 2023 Jose Luís Blazquez & David Lorenzo </p>
          <div class="credits">

            Designed by Jose Luís Blazquez & David Lorenzo</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-end">
          <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-facebook"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
          <a href="#"><span class="bi bi-linkedin"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>