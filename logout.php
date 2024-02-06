<?php 
session_start();

if (isset($_SESSION['email'])) {
    if (session_status() == PHP_SESSION_ACTIVE) {
        session_unset(); // todas las variables de sesión se eliminen
        session_destroy(); //destruir la sesión
    }
}

// Obtener la URL del servidor
$ref = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';

if (filter_var($ref, FILTER_VALIDATE_URL)) {
    header("Location: $ref");
} else {
    // Página de redirección por defecto si $ref no es una URL válida
    header("Location: index.php");
}
?>
