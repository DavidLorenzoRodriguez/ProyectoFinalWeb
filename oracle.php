<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
</head>

<body>
    <header>
        <?php
        include 'sesionON.php';
        include 'barraLogo.php';
        ?>
    </header>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div id="card-container" class="col-4" ></div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="assets\js\custom.js"></script>
            <script>
            var phpFile = 'oracleInfinito.php'; ///Modificar este parametro para elegir con que se hace la consulta
            </script>
            <div class="col-4"></div>
        </div>
    </div>
</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>

</html>