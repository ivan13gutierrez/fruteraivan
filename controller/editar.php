<?php 

$id = $_GET['id'];
$prod = "SELECT * FROM producto WHERE id = $id";
$prod = $objConexion->consultar($prod);

if ($_POST) {
    
    if(isset($_POST['editar'])) {
        
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];

        $sql = "UPDATE `producto` SET `nombre` = '$nombre', `precio` = '$precio' WHERE `producto`.`id` = $id";
        $resultado = new conexion;
        $resultado->ejecutar($sql);

        echo "<script>location.href='../index.php'</script>";
        
        
    }

}

?>