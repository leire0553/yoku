<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    die("Acceso denegado");
}

require_once "../php/pedidos.php";

if (!isset($_POST['id'], $_POST['estado'])) {
    die("Datos inválidos");
}

cambiarEstadoPedido($_POST['id'], $_POST['estado']);

header("Location: pedidos.php");
exit;
?>