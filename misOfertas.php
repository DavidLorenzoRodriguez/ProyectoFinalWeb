<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>

<body>
    <header>
        <?php
        include 'sesionON.php';
        include 'barraLogo.php';
        ?>
    </header>
    <?php
    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        exit();
    }
    if (!isset($_SESSION['admin'])==1) {
        header("Location: account.php");
        exit();
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div id="card-container" class="col-4"></div>
            <div class="col-4"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/customUser.js"></script>

    <script>
        var phpFile = 'mostrarMis.php'; // Modifica este parámetro para elegir con qué se hace la consulta
    </script>

</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>

</html>