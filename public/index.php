<?php
define('BASE_PATH', __DIR__ . '/../');
define('BASE_URL', '/yoku/');

require_once BASE_PATH . 'php/funciones/productos.php';

session_start(); // Siempre lo primero, antes de cualquier HTML
$productos = obtenerProductosActivos();
$estilo_especifico = "inicio.css"; //modiifcar archivo
require_once BASE_PATH . 'php/componentes/header.php';
?>

<div class="banner">
    <img src="<?= BASE_URL ?>img/banner-yoku.png">
    <button class="explorar"><a href="<?= BASE_URL ?>public/productos.php">Explorar ahora</a></button>
</div>

<main>
<h1>Secciones</h1>
<section class="secciones">
    <article>
    <img src="<?= BASE_URL ?>img/mujer-seccion.jpg" alt="portada de seccion mujer">
    </article>
    
    <article>
    <img src="<?= BASE_URL ?>img/hombre-seccion.jpg" alt="portada de seccion hombre">

    </article>

    <article>      
    <img src="<?= BASE_URL ?>img/accesorios-seccion.jpg" alt="portada de seccion accesorios">
    </article>
    <article>      
    <img src="<?= BASE_URL ?>img/custom-seccion.jpg" alt="portada de seccion custom">
    </article>
    
</section>

<h2>Nuestros productos</h2>

<div class="productos">

<?php foreach ($productos as $producto): ?>

    <div class="producto">
        <img src="<?= BASE_URL ?>img/productos/<?= $producto['imagen'] ?>" width="200">

        <h3><?= $producto['nombre'] ?></h3>
        <p><?= $producto['descripcion'] ?></p>
        <p><strong><?= $producto['precio'] ?> €</strong></p>

        <a href="<?= BASE_URL ?>public/producto.php?id=<?= $producto['id'] ?>">
            Ver producto
        </a>
       <form action="carritoAccion.php" method="POST">
    <input type="hidden" name="accion" value="add">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">
    <button type="submit">Añadir al carrito</button>
    </form>
    <?php if (isset($_SESSION['usuario_id'])): ?>
    <a href="<?= BASE_URL ?>listaDeseosAccion.php?accion=add&id=<?= $producto['id'] ?>">
        ❤️ Añadir a favoritos
    </a>
<?php else: ?>
    <a href="<?= BASE_URL ?>login.php">❤️ Inicia sesión para guardar</a>
<?php endif; ?>

    </div>

<?php endforeach; ?>

</div>

</main>
<footer class="footer">
    <div class="footer-container">

        <!-- LOGO + RRSS -->
        <div class="footer-col footer-brand">
            <img src="img/logos/yoku-negro-sf.png" alt="Yoku" class="footer-logo">
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
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="carrito.php">Carrito compra</a></li>
                <li><a href="#">Pedidos</a></li>
            </ul>
        </div>

        <!-- PERSONALIZACIONES -->
        <div class="footer-col">
            <h4>Personalizaciones</h4>
            <ul>
                <li><a href="personalizaciones.php">Personalizar</a></li>
                <li><a href="productos.php">Productos base</a></li>
                <li><a href="contacto.php">Información</a></li>
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
                <li><a href="contacto.php">Acerca de nosotros</a></li>
                <li><a href="#">Políticas de seguridad</a></li>
                <li><a href="#">Política de devoluciones</a></li>
            </ul>
        </div>

    </div>
</footer>

</body>
</html>
