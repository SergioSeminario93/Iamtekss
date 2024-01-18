<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario_id']) || empty($_SESSION['usuario_id'])) {
    // Si no está autenticado, redirige al usuario al inicio de sesión
    header("Location: login.php");
    exit();
}

$usuario_nombre = $_SESSION['usuario_nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Agrega aquí tus estilos y enlaces a recursos adicionales -->
</head>
<body>
    <h1>Bienvenido, <?php echo $usuario_nombre; ?>, a DOGINN</h1>
    <!-- Contenido del dashboard -->

    <!-- Agrega aquí tu contenido específico del dashboard -->

    <p><a href="cerrar_sesion.php">Cerrar sesión</a></p>
</body>
</html>
