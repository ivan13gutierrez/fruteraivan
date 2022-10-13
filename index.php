<?php 
include "model/conexion.php";
include "model/seleccion.php";
include "controller/registrar.php"; 
include "controller/borrar.php";
?>
<?php include "view/header.php" ?>
    <div class="container" style="height:100vh">
        <div class="row h-100">
            <div class="col-md-6">
                <?php include "view/registrarprod.php"; ?>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100">
                    <?php include "view/tablaprod.php" ?>
                    <?php include "view/tablaoferta.php" ?>
                </div>
            </div>
        </div>
    </div>
<?php include "view/footer.php" ?>