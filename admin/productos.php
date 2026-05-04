
<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    die("Acceso denegado");
}

require_once "../php/productos.php";
$productos = obtenerTodosProductos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin - Productos</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<h1>Gestión de productos</h1>
<a href="index.php">⬅ Volver</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Personalización</th>
        <th>Imagen</th>
        <th>Activo</th>
        <th>Acciones</th>
    </tr>

<?php foreach ($productos as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['nombre'] ?></td>
    <td><?= $p['precio'] ?> €</td>
    <td><?= $p['permite_personalizacion'] ? 'Sí' : 'No' ?></td>
    <td><?= $p['permite_imagen'] ? 'Sí' : 'No' ?></td>
    <td><?= $p['activo'] ? 'Sí' : 'No' ?></td>
    <td>
        <a href="productoEditar.php?id=<?= $p['id'] ?>">Editar</a>
 |
       <a href="productoEstado.php?id=<?= $p['id'] ?>">
    <?= $p['activo'] ? 'Desactivar' : 'Activar' ?>
</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
