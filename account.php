<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>account</title>
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

  <!-- Archivos JS de proveedores -->
  <script src="assets/js/jquery.js" type="text/javascript"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
 <!--Mensaje de alerta-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--final de mensaje alerta-->

<?php
include_once 'dbConnection.php';
?>

</head>

<body>
<header>
  
  
  <!-- ======= info sesion iniciada ======= -->
  
    <div class="col-md-4 col-md-offset-2">
      <?php
        session_start();
          if(!(isset($_SESSION['email']))){
        header("location:index.php");}
        else
        {
        $name = $_SESSION['name'];
        $email=$_SESSION['email'];
        echo '<div class="pull-right top title1">';
        echo '<span class="log1">';
        echo '<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hola,';
        echo '</span>';
        echo '<a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;';
        echo '<a href="logout.php?q=account.php" class="log">';
        echo '<button class="btn btn-danger">Cerrar Sesión</button>';
        echo '</a>';
        echo '</div>';
      }?>
    </div>
  
</header>


<?php include 'index.php'; ?>



</body>
</html>
