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
      <?php
    
    session_start();
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : ''; 
    

        ?>
        <!-- Mostrar mensaje de inicio de sesión -->
        <?php if (!(isset($_SESSION['email']))): ?>
            <p>No hay sesión activa. <a href="index.php">Volver a inicio</a></p>
        <?php else: ?>
            <p>Bienvenido, <?php echo $name; ?> | <a href="logout.php?q=perfil.php"><button class="btn btn-danger">Cerrar Sesión</button></a></p>
        <?php endif; 

        include 'barraLogo.php';
      ?>
      
  <!-- ======= Logo BUSCO ======= -->
  <nav class="navbar navbar-light custom-navbar">
    <div class="container col-md-8 col-md-offset-8"> 
    </div>
    <div class="col-md-2 col-md-offset-4">
    <a href="#" id="ingresarBtn" class="pull-right btn btn-primary sub1" data-toggle="modal" data-target="#myModal" style="border: 2px solid #0d1e2d; background-color: #041b3c;" onmouseover="this.style.border='2px solid #b5765b'; this.style.backgroundColor='#b5765b';" onmouseout="this.style.border='2px solid #0d1e2d'; this.style.backgroundColor='#041b3c';">
      <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Ingresar</b></span>
    </a>
    <a href="#" id="registrarBtn" class="pull-right btn btn-primary sub1" data-toggle="modal" data-target="#registroModal" style="border: 2px solid #0d1e2d; background-color: #041b3c;" onmouseover="this.style.border='2px solid #b5765b'; this.style.backgroundColor='#b5765b';" onmouseout="this.style.border='2px solid #0d1e2d'; this.style.backgroundColor='#041b3c';">
      <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Registrarse</b></span>
    </a>
    </div>
    
    <!-- MOdal para login-->
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

<!-- MOdal para registro-->
<div class="modal fade" id="registroModal">
      <div class="modal-dialog">
        <div class="modal-content title1">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title title1"><span style="color:orange">Ingresar</span></h4>
          </div>
          <div class="modal-body">
  <!-- inicio formulario registro-->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
    
  <fieldset>

    <!-- entrada texto-->
    <div class="form-group">
      <label class="col-md-12 control-label" for="name"></label>
      <div class="col-md-12">
      <input id="name" name="name" placeholder="Ingresa tu nombre" class="form-control input-md" type="text">

      </div>
    </div>

    <!-- entrada texto-->
    <div class="form-group">
      <label class="col-md-12 control-label" for="gender"></label>
      <div class="col-md-12">
        <select id="gender" name="gender" placeholder="Ingresa tu género" class="form-control input-md" >
      <option value="Male">Género</option>
      <option value="M">Hombre</option>
      <option value="F">Mujer</option> </select>
      </div>
    </div>
   <!-- entrada texto-->
   <div class="form-group">
      <label class="col-md-12 control-label" for="admin"></label>
      <div class="col-md-12">
        <select id="admin" name="admin" placeholder="Eres empleador o buscas trabajo" class="form-control input-md" >
      <option value="User">Eres empleador o buscas trabajo</option>
      <option value="U">Usuario</option>
      <option value="E">Empleador</option> </select>
      </div>
    </div>
    <!-- entrada texto-->
    <div class="form-group">
      <label class="col-md-12 control-label title1" for="email"></label>
      <div class="col-md-12">
        <input id="email" name="email" placeholder="Ingresa tu correo electrónico" class="form-control input-md" type="email">
        
      </div>
    </div>

    <!-- entrada texto-->
    <div class="form-group">
      <label class="col-md-12 control-label" for="mob"></label> 
      <div class="col-md-12">
      <input id="mob" name="mob" placeholder="Ingresa tu número teléfono" class="form-control input-md" type="number">
        
      </div>
    </div>

    <!-- entrada texto-->
    <div class="form-group">
      <label class="col-md-12 control-label" for="password"></label>
      <div class="col-md-12">
        <input id="password" name="password" placeholder="Ingresa tu contraseña" class="form-control input-md" type="password">    
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-12control-label" for="cpassword"></label>
      <div class="col-md-12">
        <input id="cpassword" name="cpassword" placeholder="Confirma tu contraseña" class="form-control input-md" type="password">
      </div>
    </div>

    <?php if(@$_GET['q7'])
    { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-12 control-label" for=""></label>
      <div class="col-md-12"> 
        <input  type="submit" class="sub" value="Registrarse" class="btn btn-primary"/>
      </div>
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
            <a href="java.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Java</h3>
              </div>
              <img class="img-fluid" src="assets/img/java.jpg">
            </a>
          </div>
          <div class="item Android col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="android.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Android</h3>
              </div>
              <img class="img-fluid" src="assets/img/android.jpg">
            </a>
          </div>
          <div class="item Oracle Java Python col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="oracle.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Oracle</h3>
              </div>
              <img class="img-fluid" src="assets/img/oracle.jpg">
            </a>
          </div>
          <div class="item SQL Java Python Azure col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="sql.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>SQL</h3>
              </div>
              <img class="img-fluid" src="assets/img/sql.jpg">
            </a>
          </div>
          <div class="item Azure col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="azure.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Azure</h3>
              </div>
              <img class="img-fluid" src="assets/img/azure.jpg">
            </a>
          </div>
          <div class="item Python col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="python.php" class="item-wrap fancybox">
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
  <footer>
    <?php
      include 'footer.php';
      ?>
  </footer>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>