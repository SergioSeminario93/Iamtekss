<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cierre de Sesión</title>
    <link rel="stylesheet" href="css/cerrar_sesion.css"> <!-- Ajusta la ruta según tu estructura de archivos -->
</head>
<body>
    <div class="container">
        <h1>¡Hasta pronto!</h1>
        <p>Has cerrado sesión exitosamente. Esperamos verte de nuevo pronto.</p>
        <a href="login.php">Iniciar sesión nuevamente</a>
    </div>
</body>
</html>
