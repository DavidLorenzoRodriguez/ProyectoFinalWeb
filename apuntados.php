<?php
include_once 'dbConnection.php'; 
session_start();


$id = $_POST['id'];  
$email = $_SESSION['email'];

$consulta = "INSERT INTO apuntados (id_offers, email_user) VALUES ($id, '$email')";
mysqli_query($con, $consulta);

mysqli_close($con);

header("refresh:3;verOfertas.php");
?>
