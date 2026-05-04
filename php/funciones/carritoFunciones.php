<?php
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

/**
 * Añadir producto al carrito
 */

function agregarAlCarrito($id, $texto = null, $imagen = null) {

    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id]['cantidad']++;
    } else {
        $_SESSION['carrito'][$id] = [
            'cantidad' => 1,
            'texto' => $texto,
            'imagen' => $imagen
        ];
    }
}

function quitarDelCarrito($id) {
    unset($_SESSION['carrito'][$id]);
}

/**
 * Obtener carrito
 */
function obtenerCarrito() {
    return $_SESSION['carrito'];
}

/**
 * Vaciar carrito
 */
function vaciarCarrito() {
    unset($_SESSION['carrito']);
}
?>