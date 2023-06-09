<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">
<?php  
//aqui llamo a mi cadena de conexion

include 'conexion_be.php';
//coneto a la base de datos con esto xd
//post de los campos 

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $gestion=$_POST['gestion'];
    $soporte=$_POST['soporte'];
   
$query = "INSERT INTO `tb_soporte`(`nombre`, `correo`, `gestion`, `soporte`) 
VALUES ('$nombre','$correo','$gestion','$soporte')";

$ejecutar=mysqli_query($conexion, $query);

//tu redirecionamiento
//recordate que vos tenes todo en un mismo nivel entonces quitales un .
//buena onda mano

if ($ejecutar) {
    echo '
        <script>
        alert("CASO INGRESADO - SOPORTE SE COMUNICARA CON UD PARA BRINDARLE AYUDA");
        window.location="./indexquejas.php";
        </script>';
} else {
    echo '
        <script>
        alert("La queja no ha sido almacenada de manera correcta");
        window.location="./indexquejas.php";
        </script>';
}

mysqli_close($conexion);

?>
