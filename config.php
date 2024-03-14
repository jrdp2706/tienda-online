<?php
// Configuración de la base de datos
$hostname = "localhost";
$username = "root";
$password = "";
$database = "tiendaonline";

// Crear conexión
$conexion = new mysqli($hostname, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
