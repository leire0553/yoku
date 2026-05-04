<?php
session_start();
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    die("Acceso denegado");
}

require_once "../php/productos.php";

$id = $_GET['id'];
$producto = obtenerProductoPorId($id);
?>

<h1>Editar producto</h1>

<form action="productoEditarProcesar.php" method="POST">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">

    Precio:
    <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>"><br>

    Permite personalización:
    <select name="permite_personalizacion">
        <option value="1" <?= $producto['permite_personalizacion'] ? 'selected' : '' ?>>Sí</option>
        <option value="0" <?= !$producto['permite_personalizacion'] ? 'selected' : '' ?>>No</option>
    </select><br>

    Permite imagen:
    <select name="permite_imagen">
        <option value="1" <?= $producto['permite_imagen'] ? 'selected' : '' ?>>Sí</option>
        <option value="0" <?= !$producto['permite_imagen'] ? 'selected' : '' ?>>No</option>
    </select><br>

    <button type="submit">Guardar cambios</button>
</form>

<a href="productos.php">⬅ Volver</a>
