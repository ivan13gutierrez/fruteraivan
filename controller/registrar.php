<?php 

if ($_POST) {

    if (isset($_POST['botonRegistrar'])) {

        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];

        $objConexion = new conexion();
        $sql = "INSERT INTO `producto` (`id`, `nombre`, `precio`) VALUES (NULL, '$nombre', '$precio')";
        $objConexion->ejecutar($sql);

        echo "<script>location.href='index.php'</script>";
        
    }

    if (isset($_POST['oferta'])) {
        
        $id = $_POST['id_producto'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descuento = $_POST['descuento'];

        $total = intval($precio) - ((intval($precio) * intval($descuento)) / 100);

        $objConexion = new conexion();
        $sql = "INSERT INTO `oferta` (`id_oferta`, `nombre`, `descuento`, `id_producto`) VALUES (NULL, '$nombre', '$total', '$id')";
        $objConexion->ejecutar($sql);

        echo "<script>location.href='index.php'</script>";
        
    }

}

?>