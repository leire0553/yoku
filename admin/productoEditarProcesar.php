<?php
session_start();
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    die("Acceso denegado");
}

require_once "../php/productos.php";

actualizarProducto(
    $_POST['id'],
    $_POST['precio'],
    $_POST['permite_personalizacion'],
    $_POST['permite_imagen']
);

header("Location: productos.php");
exit;
?>