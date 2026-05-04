<?php
require_once __DIR__ . "/../config/db.php";

function obtenerPedidos() {
    global $conexion;

    $sql = "SELECT p.*, u.nombre AS usuario
            FROM pedidos p
            JOIN usuarios u ON p.usuario_id = u.id
            ORDER BY p.fecha DESC";

    return $conexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function cambiarEstadoPedido($id, $estado) {
    global $conexion;

    $sql = "UPDATE pedidos SET estado = ? WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    return $stmt->execute([$estado, $id]);
}
?>