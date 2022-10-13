<div class="card w-100 mb-5">
    <div class="card-header">
        <h1>Productos</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($productos as $producto) { ?>

                <tr>
                    <th scope="row"><?php echo $producto['id'] ?></th>
                    <td><?php echo $producto['nombre'] ?></td>
                    <td><?php echo $producto['precio'] ?></td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="nombre" value="<?php echo $producto['nombre'] ?>">
                            <input type="hidden" name="precio" value="<?php echo $producto['precio'] ?>">
                            <a href="view/editar.php?id=<?php echo $producto['id'] ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                            <button name="borrar" value="<?php echo $producto['id'] ?>" type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                            <button name="seleccionar" value="<?php echo $producto['id'] ?>" type="submit" class="btn btn-sm btn-outline-success">seleccionar</button>
                        </form>
                    </td>
                </tr>
                
            <?php } ?>

        </tbody>
    </table>
</div>