<form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="precio_venta" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio_venta" name="precio_venta" required>
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="imagen" name="imagen" required>
    </div>
    <div class="text-center pt-1 mb-5 pb-1">
        <input type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="save" value="Ingresar Producto"></button>
    </div>
</form>