<?php
    include_once 'dbConnection.php'; 
    session_start();
    
    $titulo = $_POST['TituloOferta'];
    $salario = $_POST['SalarioOferta'];
    $especialidad = $_POST['EspecialidadOferta'];
    $descripcion = $_POST['DescripcionOferta'];


    $consulta = "INSERT INTO offers (Titulo,Salario,Especialidad,Descripcion) VALUES ('$titulo','$salario','$especialidad','$descripcion')";

    mysqli_query($con,$consulta);

   
    echo "    <div style='background-color: #FFF; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); max-width: 600px; margin: 0 auto; padding: 20px; text-align: center;'>
    <h2 style='color: #333; font-size: 24px; font-weight: bold; margin-top: 0;'>¡ La oferta se ha añadido correctamente !</h2>
</div>";



    mysqli_close($con);

    header("refresh:3;ofertas.php");





?>