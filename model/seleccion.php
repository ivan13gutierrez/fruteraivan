<?php

$objConexion = new conexion();

$productos = "SELECT * FROM producto";
$productos = $objConexion->consultar($productos);

$ofertas = "SELECT * FROM oferta INNER JOIN producto ON producto.id = oferta.id_producto";
$ofertas = $objConexion->consultar($ofertas);

if ($_POST) {

    if (isset($_POST['seleccionar'])) {

        $id = $_POST['seleccionar'];
        $precio = $_POST['precio'];
        $nombre = $_POST['nombre'];

    }

}

?>