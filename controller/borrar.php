<?php 

if ($_POST) {

    if (isset($_POST['borrar'])) {

        $btnBorrar = $_POST['borrar'];

        $objConexion = new conexion();
        $sql = "DELETE FROM producto WHERE id = $btnBorrar";
        $objConexion->ejecutar($sql);

        echo "<script>location.href='index.php'</script>";
        
    }

    if (isset($_POST['borrarOferta'])) {

        $btnBorrar = $_POST['borrarOferta'];

        $objConexion = new conexion();
        $sql = "DELETE FROM oferta WHERE id_oferta = $btnBorrar";
        $objConexion->ejecutar($sql);

        echo "<script>location.href='index.php'</script>";
        
    }

}

?>