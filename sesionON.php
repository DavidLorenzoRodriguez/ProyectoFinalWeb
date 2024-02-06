<div class="col-md-4 col-md-offset-2">
    <?php
        session_start();

        if (!(isset($_SESSION['email']))) {
            echo 'No hay sesión activa. Redirigiendo a index.php';
            header("location:index.php");
        } else {
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];

            echo '<div class="pull-right top title1">';
            echo '<span class="log1">';
            echo '<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hola,';
            echo '</span>';
            echo '<a href="perfil.php?q=1" class="log log1">' . $name . '</a>&nbsp;|&nbsp;';
            echo '<a href="logout.php?q=index.php" class="log">';
            echo '<button class="btn btn-danger">Cerrar Sesión</button>';
            echo '</a>';
            echo '</div>';
        }
    ?>
</div>