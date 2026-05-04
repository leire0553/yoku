
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo isset($titulo_pagina) ? $titulo_pagina : "YOKU - Tienda online";
        if (!defined('BASE_URL')) {
    define('BASE_URL', '/yoku/');
}
        ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/estilos.css">

    <?php
    // Si la variable $estilo_especifico tiene algo, lo cargamos
    if (isset($estilo_especifico)) {
        echo '<link rel="stylesheet" href="' . BASE_URL . 'css/' . $estilo_especifico . '">';
    }

    ?>

</head>
<body>
<header>
     <!-- Menú Superior (Navegación) -->
        <nav class="menu-superior">
            <div class="logo-superior">
                <img src="<?= BASE_URL ?>img/logos/yoku-negro-sf-cortado.png" alt="Logo de yoku">
                <img src="<?= BASE_URL ?>img/logos/yoku-negro-sf-letras.png" alt="Logo de yoku">
                
            </div>
        <ul>
            <li><a href="<?= BASE_URL ?>public/index.php">Inicio</a></li>
            <li><a href="<?= BASE_URL ?>public/productos.php">Productos</a></li>
            <li><a href="<?= BASE_URL ?>public/personalizaciones.php">Personalizaciones</a></li>
            <li><a href="<?= BASE_URL ?>public/contacto.php">Contacto</a></li>

        </ul>
        <div class="botones-menu">
            <li><a href="<?= BASE_URL ?>public/listaDeseos.php">❤️ Lista de deseos</a></li>
        <button><a href="<?= BASE_URL ?>public/carrito.php">Carrito</a></button>
        <button><img class="iconos" src="<?= BASE_URL ?>img/iconos/icono-perfil-blanco.png"><a href="<?= BASE_URL ?>public/login.php">Perfil</a></button>

        </div>
        
        </nav>
</header>