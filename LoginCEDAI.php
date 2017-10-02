<!DOCTYPE html>
<html lang="es">
<head>
    <title>Fullscreen Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS -->
    <link rel="stylesheet" href="css/supersized.css">
    <link rel="stylesheet" href="css/EstilosLoginCedai.css">
    <link rel="shortcut icon" href="iconos/2.ico">
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['ADMIN'])){
       header("Location: php/restringida.php");
    } else {
            
    }
?>
    <div class="page-container">
        <img src="imagenes/logocetis.jpg"><br>
        <h1>Centro de Estudios Tecnológicos Industrial y de Servicios No.67</h1>
        <form action="php/login.php" name="formulario" method="post">
            <input type="text" name="user" class="user" placeholder="Usuario &#128100;">
            <input type="password" name="pw" class="pw" placeholder="Contraseña &#x1F512;">
            <input type="submit" id="btn" name="btn" value="Iniciar Sesion">
        </form>
    </div>
    <!-- Javascript -->
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/supersized.3.2.7.min.js"></script>
    <script src="js/supersized-init.js"></script>
</body>
</html>
