<?php

    include 'conexion_be.php';


    $nombre=$_POST['nombre'];
    $correo=$_POST['apellido'];
    $Usuario=$_POST['correo'];
    $password=$_POST['contraseña'];
   
    $query="INSERT INTO `tb_usuario`(`nombre`, `apellido`, `correo`, `contraseña`) 
            VALUES ('$nombre','$correo','$Usuario','$password')";


    $ejecutar=mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
        alert("El usuario Ah sido Almacenado de manera Correcta");
        window.location="./inner-page.php";
        </script>';
    }
    else
    {
        echo'
        <script>
        alert("Error el usuario No se alamceno de 
        manera Correcta!!
        intentalo otra vez");
        window.location="./index.php";
        </script>';

    }

    mysqli_close($conexion);

?>