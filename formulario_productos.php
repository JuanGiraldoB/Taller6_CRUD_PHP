<form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <label class="form-label" for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="precio_venta">Precio</label>
        <input type="number" name="precio_venta" id="precio_venta" class="form-control" placeholder="Precio" required />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen" class="form-control" required />
    </div>
    <div class="text-center pt-1 mb-5 pb-1">
        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="save" type="submit">Guardar</button>
    </div>
</form>