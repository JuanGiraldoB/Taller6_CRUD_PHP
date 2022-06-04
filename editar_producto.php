<?php include("db.php"); 

if(isset($_POST['edit'])){

    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $precio_venta = $_POST['precio_venta'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "UPDATE producto SET nombre='$nombre', precio_venta='$precio_venta', imagen='$imagen' WHERE id=$id";
    $result = mysqli_query($conn, $query);

    header('Location: pagina_usuario.php');

}

?>