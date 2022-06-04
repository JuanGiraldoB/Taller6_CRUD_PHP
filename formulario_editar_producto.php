<form action="editar_producto.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="precio_venta" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio_venta" name="precio_venta" value="<?php echo $row['precio_venta']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen actual</label>
        <div class="card" style="width: 18rem;">
            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" class="card-img-top" alt="Texto correspondiente a la imagen que se desee subir">
        </div>
        <br>
        <input type="file" class="form-control" id="imagen" name="imagen" required>
    </div>
    <div class="text-center pt-1 mb-5 pb-1">
        <input type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="edit" value="Editar Producto"></button>
    </div>
</form>