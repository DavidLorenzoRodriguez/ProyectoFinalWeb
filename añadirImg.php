<?php
include_once 'dbConnection.php'; 
session_start();

$ruta="assets/img/";
$nomfichero = basename($_FILES['img']['name']);

$consulta = "UPDATE user SET img='$nomfichero' WHERE email = '" . $_SESSION['email'] . "'";

mysqli_query($con,$consulta);

move_uploaded_file($_FILES['img']['tmp_name'],$ruta.$nomfichero);

echo "    <div style='background-color: #FFF; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); max-width: 600px; margin: 0 auto; padding: 20px; text-align: center;'>
<h2 style='color: #333; font-size: 24px; font-weight: bold; margin-top: 0;'>¡ Imagen añadida correctamente !</h2>
</div>";



mysqli_close($con);

header("refresh:3;perfil.php");
?>