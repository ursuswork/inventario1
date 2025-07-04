<!DOCTYPE html>
<html>
<head>
    <title>Agregar Maquinaria</title>
</head>
<body>
    <h2>Agregar nueva maquinaria</h2>
    <form action="agregar.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Nombre" required><br><br>
        <textarea name="descripcion" placeholder="Descripción"></textarea><br><br>
        <input type="text" name="modelo" placeholder="Modelo"><br><br>
        <input type="text" name="marca" placeholder="Marca"><br><br>
        <input type="text" name="serie" placeholder="Número de serie"><br><br>
        <input type="date" name="fecha_adquisicion"><br><br>
        <input type="text" name="ubicacion" placeholder="Ubicación"><br><br>
        <input type="file" name="imagen" accept="image/*"><br><br>
        <input type="submit" value="Agregar">
    </form>
    <br>
    <a href="index.php">Ver Inventario</a>
</body>
</html>
