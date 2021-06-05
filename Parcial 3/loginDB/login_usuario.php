<?php  
    session_start();

    include "conexion.php";

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $password = hash("garcia", $password); 

    $validarLogin = $conexion->prepare("SELECT * FROM usuarios
                                        WHERE usuario = '$usuario' AND contraseña = '$password'");
    $validarLogin->execute();

    if ($validarLogin->rowCount() > 0) {
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenida.php");
        exit;
    }else {
        echo '
            <script>
            alert("El usuario no existe, revise los datos introducidos");
            window.location = "index.php";
            </script>
            ';
            exit;
    }
?>