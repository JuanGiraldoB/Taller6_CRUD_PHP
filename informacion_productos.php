<table class="table align-middle table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio de venta</th>
            <th scope="col">Imagen</th>
            <?php if (isset($_SESSION['usuario'])) { ?>
                <th>Acciones</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM producto";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['precio_venta'] ?></td>
                <td>
                    <img width="100" src="data:image/png;base64,<?php echo  base64_encode($row['imagen']); ?>">
                </td>
                <?php if (isset($_SESSION['usuario'])) { ?>
                    <td>
                        <a href="editar_producto_vista.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <a href="eliminar_producto.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>