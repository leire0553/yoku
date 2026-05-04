<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../index.php");

    die("Acceso denegado");
}

require_once "../php/pedidos.php";
$pedidos = obtenerPedidos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin - Pedidos</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<h1>Gestión de pedidos</h1>
<a href="index.php"> Volver</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Total</th>
        <th>Estado</th>
        <th>Fecha</th>
        <th>Dirección</th>
        <th>Acciones</th>
    </tr>

<?php foreach ($pedidos as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= htmlspecialchars($p['usuario']) ?></td>
    <td><?= $p['total'] ?> €</td>
    <td><?= $p['estado'] ?></td>
    <td><?= $p['fecha'] ?></td>
    <td><?= htmlspecialchars($p['direccion_envio']) ?></td>
    <td>
        <form action="pedidoEstado.php" method="POST">
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            <select name="estado">
                <option value="pendiente">Pendiente</option>
                <option value="enviado">Enviado</option>
                <option value="cancelado">Cancelado</option>
            </select>
            <button type="submit">Cambiar</button>
        </form>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
