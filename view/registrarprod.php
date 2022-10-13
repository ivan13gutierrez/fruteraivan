<div class="d-flex align-items-center justify-content-center w-100 h-100">
    <div class="card w-100">
        <div class="card-header">
            <h1>Registrar productos</h1>
        </div>
        <div class="card-body">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="inputEmail">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
                </div>
                <div class="form-group">
                    <label for="inputPrecio">Precio</label>
                    <input name="precio" type="number" class="form-control" id="inputPrecio" placeholder="Precio del producto">
                </div>
                <button name="botonRegistrar" type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
        <div class="card-footer">

            <form action="index.php" method="post">
                <input type="hidden" name="id_producto" value="<?php if (isset($id)) { echo $id; } ?>">
                <div class="form-group">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" class="form-control" id="descuento" name="nombre" value="<?php if (isset($nombre)) { echo $nombre; } ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="descuento" name="precio" value="<?php if (isset($precio)) { echo $precio; } ?>">
                </div>
                <div class="d-flex">
                    <div class="form-group mr-4">
                        <input type="number" class="form-control" id="descuento" name="descuento" placeholder="descuento">
                    </div>
                    <button name="oferta" class="btn btn-warning h-25">Aplicar oferta</button>
                </div>
            </form>

        </div>
    </div>
</div>