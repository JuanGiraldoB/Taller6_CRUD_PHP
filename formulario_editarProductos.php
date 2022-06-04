<form action="">
    <div class="form-outline mb-4">
        <label class="form-label" for="ident">ID</label>
        <label><?php echo $id; ?></label>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="nombre">Nombre</label>
        <input type="text" id="nombre" class="form-control" value="<?php echo $nombre; ?>" required />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="precio_venta">Precio</label>
        <input type="text" id="precio_venta" class="form-control" value="<?php echo $precio_venta; ?>" required />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="imagen">Imagen</label>
        <input type="file" id="imagen" class="form-control" value="<?php echo $imagen; ?>" required />
    </div>
</form>
