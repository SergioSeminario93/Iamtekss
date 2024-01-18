<?php
session_start();

// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluimos el archivo de conexión a la base de datos
    include 'includes/conexion.php';
  
    // Obtenemos los datos del formulario
    $email = $_POST["email"];
    $contrasena = $_POST["password"];

    // Consulta SQL para obtener la contraseña hasheada
    $query = "SELECT * FROM doginn.usuarios WHERE email = '$email'";

    $result = mysqli_query($conexion, $query);

    if ($result) {
        // Verificamos si se encontró algún usuario con el correo proporcionado
        if (mysqli_num_rows($result) > 0) {
            // El usuario existe, obtenemos sus datos
            $usuario = mysqli_fetch_assoc($result);

            // Verificamos la contraseña hasheada
            if (password_verify($contrasena, $usuario['password'])) {
                // El usuario ha iniciado sesión correctamente
                // Almacena la información del usuario en la sesión
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nombre'] = $usuario['nombre'];

                // Redirige al usuario a index_main.php
                header("Location: index_main.php");
                exit();
            } else {
                // Contraseña incorrecta
                $mensaje = "Contraseña incorrecta. ¿No estás registrado? <a href='registro.php'>Regístrate aquí</a>";
            }
        } else {
            // El usuario no está registrado
            $mensaje = "Usuario no registrado. ¿Quieres registrarte? <a href='registro.php'>Haz clic aquí</a>";
        }
    } else {
        $mensaje = "Error en la consulta: " . mysqli_error($conexion);
    }

    // Cerramos la conexión a la base de datos
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido a DOGiNN</h1>
                <p>Inicio de sesión</p>
                    <?php
                        if (isset($mensaje)) : 
                    ?>
                <p>
                    <?php
                        echo $mensaje; 
                    ?>
                </p>
        <?php endif; ?>

        <!-- Utilizamos el método POST en el formulario -->
        <form method="post" action="login.php">

            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <button type="submit">Continuar</button>&nbsp;&nbsp;
            <a class="forgotpass" href="forgotpass.php">¿Olvidaste tu contraseña?</a>
        </form>
            <a class="nuevo">¿Eres nuevo?</a>
            <a href="registro.php">
                <button type="submit"class="register-link">Resgístrate</button>
            </a>
    </div>
</body>
</html>
