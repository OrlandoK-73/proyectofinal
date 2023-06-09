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
    $comercio=$_POST['comercio'];

    $departamento=$_POST['departamento'];
    $municipio=$_POST['municipio'];
    $sucursal=$_POST['sucursal'];

    $factura=$_POST['factura'];
    $descripcion=$_POST['descripcion'];

$query = "INSERT INTO `tb_registroqueja`(`nombre`, `correo`, `comercio`, `departamento`, `municipio`, `sucursal`, `factura`, `descripcion`) 
VALUES ('$nombre','$correo','$comercio','$departamento','$municipio','$sucursal','$factura','$descripcion')";

$ejecutar=mysqli_query($conexion, $query);

//tu redirecionamiento
//recordate que vos tenes todo en un mismo nivel entonces quitales un .
//buena onda mano

if ($ejecutar) {
    echo '
        <script>
        alert("QUEJA INGRESADA");
        window.location="./ingresarquejas.php";
        </script>';
} else {
    echo '
        <script>
        alert("La queja no ha sido almacenada de manera correcta");
        window.location="./ingresarquejas.php";
        </script>';
}

mysqli_close($conexion);

?>
