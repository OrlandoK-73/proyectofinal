<?php

    //Iniciliza la sesion y manda a llamar la conexion
    session_start();
    include 'conexion_be.php';

    //Recibe los valores por metodo POST y encripta la contraseña para compara en la BD
    $corrreo = $_POST['correo'];
    $contrasena = $_POST['contraseña'];
    
    $validar_login = mysqli_query($conexion, "SELECT * FROM `tb_usuario` WHERE correo = '$corrreo' and contraseña = '$contrasena'");

    if ($validar_login) {
        // La consulta se ejecutó correctamente, ahora puedes verificar el número de filas
        if(mysqli_num_rows($validar_login) > 0){
            $_SESSION['Usuario'] = $corrreo;
            header("location: ./indexquejas.php");
            exit;
        } else {
            echo '
                <script>
                    alert("Usuario no existe, por favor verifique los datos introducidos");
                    window.location = "./index.php";
                </script>    
            ';
            exit;
        }
    } else {
        // Hubo un error en la consulta SQL
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

?>
