<?php
include_once 'dbConnection.php'; 
session_start();

$page = $_POST['page'];
$limit = 3; // Puedes ajustar esto si es necesario
$offset = ($page - 1) * $limit;

$email = $_SESSION['email'];
$consulta = "
    SELECT o.id, o.Titulo, o.Salario, o.Especialidad, o.Descripcion
    FROM offers o
    JOIN apuntados a ON o.id = a.id_offers
    WHERE a.email_user = '$email'
    ORDER BY o.id
    LIMIT $limit OFFSET $offset
";
$result = mysqli_query($con, $consulta);

$response = array();
while ($row = mysqli_fetch_assoc($result)) {
    $response[] = $row;
}

echo json_encode($response);
mysqli_close($con);
?>
