<?php 
$bd_host="localhost:3307";
$bd_nombre="proyecto";
$bd_usuario="root";
$bd_contraseña="";

$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_contraseña, $bd_nombre);

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fecha_nac = $_POST["fecha_nac"];
$contrasena = $_POST["contrasena"];

$consulta = "INSERT INTO usuarios (nombre, email, fecha_nac, contrasena)
 VALUES ('$nombre', '$email', '$fecha_nac', md5('$contrasena'))";

mysqli_query($conexion, $consulta);
header("Location: principal.php#inicio");

mysqli_close($conexion);
?>
