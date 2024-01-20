<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index</title>
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

  <?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {
    alert("El campo de nombre debe ser introducido");
    return false;
  }
  var z =document.forms["form"]["college"].value;if (z == null || z == "") {
      alert("Debe indicar la institución educativa");
      return false;
    }
    var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
  alert("Dirección de correo inválido");
  return false;
}
var a = document.forms["form"]["password"].value;
if(a == null || a == "")
{
  alert("Debe introducir una contraseña");
  return false;
}
if(a.length<5 || a.length>25)
{
  alert("La contraseña debe tener una extensión entre 5 y 25 caracteres");
  return false;
}
var b = document.forms["form"]["cpassword"].value;
if (a!=b){alert("Las contraseñas no coinciden");
return false;
}
}
</script>

</head>

<body>
  <header>
  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="index.php">INICIO</a></li>
            <li><a href="perfil.html">PERFIL</a></li>
            <li><a href="rrhh.html">RRHH</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
  <!-- ======= Logo BUSCO ======= -->
  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/img/logo-busco.png" alt="logo-busco" class="img-fluid" style="width: 300px; height: auto;">
      </a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
    <div class="col-md-2 col-md-offset-4">
      <a href="#" id="ingresarBtn" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal">
        <span class="glyphicon glyphicon-log-in" aria-hidden="true">
        </span>&nbsp;<span class="title1"><b>Ingresar</b></span>
      </a>
    </div>
    
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content title1">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title title1"><span style="color:orange">Ingresar</span></h4>
          </div>
          <div class="modal-body">
          <form class="form-horizontal" action="login.php?q=index.php" method="POST">
          <fieldset>
              <!-- entrada de texto-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email"></label>  
                <div class="col-md-6">
                  <input id="email" name="email" placeholder="Ingresa tu correo electrónico" class="form-control input-md" type="email">
                </div>
              </div>

              <!-- entrada contraseña-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="password"></label>
                <div class="col-md-6">
                <input id="password" name="password" placeholder="Ingresa tu contraseña" class="form-control input-md" type="password">    
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Ingresar</button>
              </div>
          </fieldset>
          </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
  </header>

  <main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>Ofertas de Empleo</h2>
            <p class="mb-0">Busco es tu portal de empleo tecnológico</p>
          </div>
          <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active">All</a>
              <a href="#" data-filter=".Java">Java</a>
              <a href="#" data-filter=".Android">Android</a>
              <a href="#" data-filter=".Oracle">Oracle</a>
              <a href="#" data-filter=".SQL">SQL</a>
              <a href="#" data-filter=".Azure">Azure</a>
              <a href="#" data-filter=".Python">Python</a>
            </div>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <div class="item Java col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="java.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Java</h3>
              </div>
              <img class="img-fluid" src="assets/img/java.jpg">
            </a>
          </div>
          <div class="item Android col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="android.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Android</h3>
              </div>
              <img class="img-fluid" src="assets/img/android.jpg">
            </a>
          </div>
          <div class="item Oracle Java Python col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="oracle.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Oracle</h3>
              </div>
              <img class="img-fluid" src="assets/img/oracle.jpg">
            </a>
          </div>
          <div class="item SQL Java Python Azure col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="sql.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>SQL</h3>
              </div>
              <img class="img-fluid" src="assets/img/sql.jpg">
            </a>
          </div>
          <div class="item Azure col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="azure.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Azure</h3>
              </div>
              <img class="img-fluid" src="assets/img/azure.jpg">
            </a>
          </div>
          <div class="item Python col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="python.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Python</h3>
              </div>
              <img class="img-fluid" src="assets/img/python.jpg">
            </a>
          </div>
        </div>
      </div>
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
      <div class="row footer justify-content-center">
      </div>
      <div class="row footer justify-content-center">
        <div class="col-md-6 box text-center">
          <a href="#" data-toggle="modal" data-target="#login">Acceso Administrador</a>
        </div>
        <div class="col-md-6 box text-center">
          <a href="feedback.php">Observaciones</a>
        </div>
      </div>
    </div>
  </footer>

<!--login admin-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Ingresar</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
          <div class="col-md-6">
          <form role="form" method="post" action="admin.php?q=index.php">
        <div class="form-group">
          <input type="text" name="uname" maxlength="21"  placeholder="Usuario Admin" class="form-control"/> 
        </div>
        <div class="form-group">
          <input type="password" name="password" maxlength="15" placeholder="Contraseña Admin" class="form-control"/>
        </div>
        <div class="form-group" align="center">
          <input type="submit" name="login" value="Ingresar" class="btn btn-primary" />
        </div>
          </form>
          </div><div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>