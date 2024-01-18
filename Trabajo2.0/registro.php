<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css"> <!-- Ajusta la ruta según tu estructura de archivos -->
</head>
<body>
    <div class="container">
        <h1>Registrate en DOGiNN</h1>
        <p>Introduce tus datos</p>
        <form method="post" action="registro.php">
            <input type="nombre" name="nombre" id="nombre" placeholder="Nombre" required>
            <input type="primer_apellido" name="primer_apellido" id="primer_apellido" placeholder="Primer apellido" required>
            <input type="segundo_apellido" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo apellido" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <input type="password" name="confirmar_password" id="confirmar_password" placeholder="Confirma tu contraseña" required>
            <button type="submit">Continuar</button>
        </form>
        <a class="cuenta">¿Ya tienes cuenta?</a>
            <a href="login.php">
                <button type="submit"class="login-link">Inicia sesión</button>
            </a>
    </div>

<?php
// Incluimos el archivo de procesamiento del registro
include 'backend/registro_be.php';
?>
</body>
</html>
