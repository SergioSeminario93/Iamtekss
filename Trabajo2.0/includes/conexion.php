<?php
//declaramos la varible de donde saldran los datos 
$servername = "localhost";
$usuario = "root";
$password = "";
$database = "doginn";

// Crear conexión
$conexion = new mysqli($servername, $usuario, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error al conectar la base de datos de la pagina " . $conexion->connect_error);
}
?>
































?>