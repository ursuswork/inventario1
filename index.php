<?php
include 'conexion.php';
$resultado = $conexion->query("SELECT * FROM maquinaria");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventario de Maquinaria</title>
</head>
<body>
    <h1>Inventario de Maquinaria</h1>
    <a href="formulario.php">Agregar nueva maquinaria</a>
    <hr>
    <table border="1" cellpadding="10">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Serie</th>
            <th>Descripción</th>
            <th>Ubicación</th>
            <th>Fecha Adquisicion</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <td>
                <?php if ($row['imagen']) { ?>
                    <img src="ver_imagen.php?id=<?php echo $row['id']; ?>" width="100">
                <?php } else { echo "Sin imagen"; } ?>
            </td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['serie']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['ubicacion']; ?></td>
            <td><?php echo $row['fecha_adquisicion']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
