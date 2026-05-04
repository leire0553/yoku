
<?php
define('BASE_PATH', __DIR__ . '/../');
define('BASE_URL', '/yoku/');
require BASE_PATH . 'php/funciones/productos.php';
require BASE_PATH . 'php/funciones/carritoFunciones.php';

$estilo_especifico='detalleProducto.css';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Producto no encontrado");
}
$producto = obtenerProductoPorId($id);

$titulo_pagina=$producto['nombre'];

require BASE_PATH . 'php/componentes/header.php';

?>



<main class="container-detalle">
    <div class="product-layout">
        
        <section class="product-media">
            <div class="main-image-container">
                <img src="<?= BASE_URL ?>img/productos/<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
            </div>
        </section>

        <section class="product-info">
            <h1 class="product-title"><?= $producto['nombre'] ?></h1>
            <p class="product-stock">Stock disponible: 10</p>
            <p class="product-price"><?= number_format($producto['precio'], 2) ?> €</p>

            <form action="carritoAccion.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="accion" value="add">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">

    <?php if ($producto['permite_personalizacion']): ?>
        <label>Texto personalizado</label>
        <input type="text" name="texto">
    <?php endif; ?>

    <?php if ($producto['permite_imagen']): ?>
        <label>Imagen personalizada</label>
        <input type="file" name="imagen">
    <?php endif; ?>

    <button type="submit">Añadir al carrito</button>
</form>
<a href="<?= BASE_URL ?>procesar/listaDeseosAccion.php">❤️ Lista de deseos</a>



        </section>
    </div>

    <section class="related-section">
        <h2>Productos relacionados</h2>
        <div class="related-grid">
            <?php 
            $count = 0;
            foreach ($productosRelacionados as $rel): 
                if($rel['id'] == $id) continue;
                if($count >= 3) break; 
            ?>
            <div class="related-card">
                <a href="<?= BASE_URL ?>public/producto.php?id=<?= $rel['id'] ?>">
                    <img src="<?= BASE_URL ?>img/productos/<?= $rel['imagen'] ?>" alt="<?= $rel['nombre'] ?>">
                    <h3><?= $rel['nombre'] ?></h3>
                    <p><?= $rel['precio'] ?> €</p>
                </a>
            </div>
            <?php $count++; endforeach; ?>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer-container">

        <!-- LOGO + RRSS -->
        <div class="footer-col footer-brand">
            <img src="<?= BASE_URL ?>img/logos/yoku-negro-sf.png" alt="Yoku" class="footer-logo">
            <p class="footer-brand-text">YOKU! Clothing Store</p>

            <div class="footer-socials">
                <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://youtube.com/"><i class="fab fa-youtube"></i></a>
                <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
               
            </div>
        </div>

        <!-- INICIO -->
        <div class="footer-col">
            <h4>Inicio</h4>
            <ul>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Carrito compra</a></li>
                <li><a href="#">Pedidos</a></li>
            </ul>
        </div>

        <!-- PERSONALIZACIONES -->
        <div class="footer-col">
            <h4>Personalizaciones</h4>
            <ul>
                <li><a href="#">Personalizar</a></li>
                <li><a href="#">Productos base</a></li>
                <li><a href="#">Información</a></li>
            </ul>
        </div>

        <!-- PRODUCTOS -->
        <div class="footer-col">
            <h4>Productos</h4>
            <ul>
                <li><a href="#">Mujer</a></li>
                <li><a href="#">Hombre</a></li>
                <li><a href="#">Accesorios</a></li>
            </ul>
        </div>

        <!-- CONTACTO -->
        <div class="footer-col">
            <h4>Contacto</h4>
            <ul>
                <li><a href="#">Acerca de nosotros</a></li>
                <li><a href="#">Políticas de seguridad</a></li>
                <li><a href="#">Política de devoluciones</a></li>
            </ul>
        </div>

    </div>
</footer>
</body>
</html>
