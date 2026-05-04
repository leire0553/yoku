<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    
    header("Location: ../index.php");
   
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Admin - YOKU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    
</head>
<body>

<header>
     <!-- Menú Superior (Navegación) -->
        <nav class="menu-superior">
            <div class="logo-superior">
                <img src="../img/logos/yoku-negro-sf-cortado.png" alt="Logo de yoku">
                <img src="../img/logos/yoku-negro-sf-letras.png" alt="Logo de yoku">
                
            </div>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../productos.php">Productos</a></li>
            <li><a href="../personalizaciones.php">Personalizaciones</a></li>
            <li><a href="../contacto.php">Contacto</a></li>

        </ul>
        <div class="botones-menu">
        <button><a href="../carrito.php">Carrito</a></button>
        <button><img class="iconos" src="../img/iconos/icono-perfil-blanco.png"><a href="login.php">Perfil</a></button>

        </div>
        
        </nav>
</header>
<h1>Panel de administración</h1>
<br>
<p>Bienvenida, <?= $_SESSION['nombre'] ?></p>

<nav>
    <ul>
        <li><a href="../productos.php">Gestionar productos</a></li>
        <li><a href="../pedidos.php">Ver pedidos</a></li>
        <li><a href="../index.php">Volver a la tienda</a></li>
    </ul>
</nav>

<footer class="footer">
    <div class="footer-container">

        <!-- LOGO + RRSS -->
        <div class="footer-col footer-brand">
            <img src="../img/logos/yoku-negro-sf.png" alt="Yoku" class="footer-logo">
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
                <li><a href="../perfil.php">Perfil</a></li>
                <li><a href="../carrito.php">Carrito compra</a></li>
                <li><a href="../pedidos.php">Pedidos</a></li>
            </ul>
        </div>

        <!-- PERSONALIZACIONES -->
        <div class="footer-col">
            <h4>Personalizaciones</h4>
            <ul>
                <li><a href="../personalizaciones.php">Personalizar</a></li>
                <li><a href="../productos.php">Productos base</a></li>
                <li><a href="../contacto.php">Información</a></li>
            </ul>
        </div>

        <!-- PRODUCTOS -->
        <div class="footer-col">
            <h4>Productos</h4>
            <ul>
                <li><a href="../productos.php">Mujer</a></li>
                <li><a href="../productos.php">Hombre</a></li>
                <li><a href="../productos.php">Accesorios</a></li>
            </ul>
        </div>

        <!-- CONTACTO -->
        <div class="footer-col">
            <h4>Contacto</h4>
            <ul>
                <li><a href="../contacto.php">Acerca de nosotros</a></li>
                <li><a href="#">Políticas de seguridad</a></li>
                <li><a href="#">Política de devoluciones</a></li>
            </ul>
        </div>

    </div>
</footer>
</body>
</html>
