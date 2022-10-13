<div class="card w-100">
    <div class="card-header">
        <h1>Ofertas</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($ofertas as $oferta) { ?>

                <tr>
                    <th scope="row"><?php echo $oferta['id_oferta'] ?></th>
                    <td><?php echo $oferta['nombre'] ?></td>
                    <td><?php echo $oferta['precio'] ?></td>
                    <td><?php echo $oferta['descuento'] ?></td>
                    <td>
                        <form action="index.php" method="post">
                            <button name="borrarOferta" value="<?php echo $oferta['id_oferta'] ?>" type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                        </form>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>