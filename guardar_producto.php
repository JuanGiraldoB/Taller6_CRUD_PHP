<?php

include('db.php');

if(isset($_POST['save'])){

    $nombre = $_POST['nombre'];
    $precio_venta = $_POST['precio_venta'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO producto(nombre, precio_venta, imagen)
        VALUES('$nombre', '$precio_venta', '$imagen')";
    
    $result = mysqli_query($conn, $query);

    header("Location: pagina_usuario.php");
}