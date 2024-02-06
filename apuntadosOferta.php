<?php
include_once 'dbConnection.php'; 
session_start();

if(isset($_POST['id'])){
    $offerId = $_POST['id'];

    // Realiza tu consulta SQL aquí
    $consulta = "SELECT email_user FROM apuntados WHERE id_offers='$offerId' ";
    $result = mysqli_query($con, $consulta);

    $response = '<ul>'; // Inicia una lista HTML
    while ($row = mysqli_fetch_assoc($result)) {
        $response .= '<li>' . $row['email_user'] . '</li>'; // Agrega cada elemento como un ítem de la lista
    }
    $response .= '</ul>'; // Cierra la lista HTML

    // Devuelve los resultados como HTML

    mysqli_close($con);

    echo '<style>
  #resultadoContainer {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
  }

  #resultadoContent {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
</style>';

echo '<div id="resultadoContainer" class="hidden">';
echo '  <div id="resultadoContent">';
echo '    ' . $response;
echo '  </div>';
echo '</div>';
header("refresh:4;verOfertas.php");


echo '<script>
  function cerrarResultadoContainer() {
    document.getElementById("resultadoContainer").classList.add("hidden");
  }
</script>';
    
} else {
    // Manejar el caso en que no se proporciona 'id'
    echo 'No se proporcionó el ID';
}
header("refresh:4;verOfertas.php");

?>
