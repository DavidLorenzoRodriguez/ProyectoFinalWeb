<?php
include_once 'dbConnection.php'; 
session_start();

$page = $_POST['page'];
$limit = 3; // Puedes ajustar esto si es necesario
$offset = ($page - 1) * $limit;

if($_SESSION['admin']==1){
    $admin=1;
} 
else if($_SESSION['admin']==0){
    $admin=0;
} 


$consulta = "SELECT id,Titulo, Salario , Especialidad, Descripcion FROM offers WHERE Especialidad='Python' ORDER BY id LIMIT $limit OFFSET $offset ";
$result = mysqli_query($con, $consulta);

$response = array();
while ($row = mysqli_fetch_assoc($result)) {
    if((isset($_SESSION['admin']))){
    $row['admin'] = $admin;    
    }
    $response[] = $row;
}

echo json_encode($response);
mysqli_close($con);
?>
