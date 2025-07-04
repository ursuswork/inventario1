<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$serie = $_POST['serie'];
$fecha = $_POST['fecha_adquisicion'];
$ubicacion = $_POST['ubicacion'];
$imagen = isset($_FILES['imagen']['tmp_name']) ? addslashes(file_get_contents($_FILES['imagen']['tmp_name'])) : null;

$sql = "INSERT INTO maquinaria (nombre, descripcion, modelo, marca, serie, fecha_adquisicion, ubicacion, imagen)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssssssss", $nombre, $descripcion, $modelo, $marca, $serie, $fecha, $ubicacion, $imagen);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Maquinaria agregada con éxito. <a href='index.php'>Ver Inventario</a>";
} else {
    echo "Error al guardar: " . $stmt->error;
}
?>
