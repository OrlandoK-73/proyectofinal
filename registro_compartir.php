<?php

    include 'conexion_be.php';


    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $expe=$_POST['expe'];
    
    $query="INSERT INTO `tb_share`(`nombre`, `correo`, `expe`) 
            VALUES ('$nombre','$correo','$expe')";


    $ejecutar=mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
        alert("GRACIAS POR EXPERIENCIA");
        window.location="./indexquejas.php";
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