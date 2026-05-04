<?php
define('BASE_URL', '/yoku/');
if (!isset($_GET['id'])) {
    die("Pedido no encontrado");
}
?>

<h1>✅ Pedido realizado</h1>
<p>Tu pedido se ha registrado correctamente.</p>
<p><strong>Número de pedido:</strong> <?= $_GET['id'] ?></p>

<a href="<?= BASE_URL ?>public/index.php">Volver a la tienda</a>
