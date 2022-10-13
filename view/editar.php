<?php 
include "../model/conexion.php";
include "../model/seleccion.php";
include "../controller/editar.php"; 
include "header.php";
?>
    <div class="container" style="height:100vh">
        <div class="row h-100">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="d-flex align-items-center justify-content-center w-100 h-100">
                    <div class="card w-100 p-4">

                        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                            <h1>Editar productos</h1>
                            <div class="form-group">
                                <label for="inputEmail">Nombre</label>
                                <input name="nombre" value="<?php echo $prod[0]['nombre'] ?>" type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group">
                                <label for="inputPrecio">Precio</label>
                                <input name="precio" value="<?php echo $prod[0]['precio'] ?>" type="number" class="form-control" id="inputPrecio" placeholder="Precio del producto">
                            </div>
                            <button name="editar" type="submit" class="btn btn-primary">Editar</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
<?php include "header.php" ?>