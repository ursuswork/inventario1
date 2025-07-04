<?php
$conexion = new mysqli("HOST", "USUARIO", "CONTRASEÑA", "NOMBRE_BD", PUERTO);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

