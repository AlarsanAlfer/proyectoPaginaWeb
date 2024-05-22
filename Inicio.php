<?php 

$bd_host="localhost:3307";
$bd_nombre="proyecto";
$bd_usuario="root";
$bd_contraseña="";

$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_contraseña, $bd_nombre);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["contrasena"];

    // Consulta para verificar las credenciales
    $consulta = "SELECT * FROM usuarios WHERE nombre='$nombre' AND contrasena=md5('$contrasena')";
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($resultado) == 1) {
        // Iniciar sesión o establecer alguna variable de sesión para mantener al usuario autenticado
        session_start();
        $_SESSION["nombre"] = $nombre;
        // Redirigir a la página de inicio o a alguna otra página protegida
        header("Location: principalLoggeado.php");
        exit;
    } else {
        // Si las credenciales no son válidas, redirigir a la página principal con un mensaje de error
        header("Location: principal.php?error=1#inicio");
        exit;      
    }
}

?>