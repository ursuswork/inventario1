<?php
include 'conexion.php';
$id = $_GET['id'];
$resultado = $conexion->query("SELECT imagen FROM maquinaria WHERE id = $id");

if ($row = $resultado->fetch_assoc()) {
    header("Content-type: image/jpeg");
    echo $row['imagen'];
}
?>
