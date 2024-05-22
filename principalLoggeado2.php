<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloPrinc.css">
    <title>Adopta un peludo</title>
    <link rel="icon" href="imagenes/logoPrinc.png">
</head>
<body>

    <?php 
    session_start();
    if (!isset($_SESSION["nombre"])){
        header("Location: principal.php");
    }
    ?>
    <section class="somos">
        <?php
        include("principalLogged.php");
        ?>
    </section>
 
</body>
</html>
