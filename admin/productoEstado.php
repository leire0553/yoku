

<?php

session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    die("Acceso denegado");
}

require_once "../php/productos.php";

if (!isset($_GET['id'])) {
    die("ID no válido");
}

$id = $_GET['id'];
cambiarEstadoProducto($id);

header("Location: productos.php");
exit;
?>