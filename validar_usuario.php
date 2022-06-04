<?php
include('db.php');

if (isset($_POST['save'])) {


    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuario
            WHERE id = '$id' AND nombre = '$nombre' AND contrasena = '$contrasena'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    if ($row == NULL) {
        $_SESSION['usuario'] = NULL;
        $_SESSION['mensaje'] = 'Usuario no existe';
        $_SESSION['tipo_mensaje'] = 'danger';
        header("Location: index.php");
    } else {
        $_SESSION['usuario'] = $nombre;
        $_SESSION['mensaje'] = 'Sesión iniciada';
        $_SESSION['tipo_mensaje'] = 'success';
        header("Location: pagina_usuario.php");
    }
    
}
