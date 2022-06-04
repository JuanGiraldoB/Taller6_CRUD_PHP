<?php

include('db.php');

if(isset($_POST['save'])){

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuario(id, nombre, contrasena)
        VALUES($id, '$nombre', '$contrasena')";

    $result = mysqli_query($conn, $query);

    if(!$result){
        $_SESSION['mensaje'] = 'No se pudo guardar';
        $_SESSION['tipo_mensaje'] = 'danger';
        header("Location: registrar_usuario.php");
    }else{
        $_SESSION['mensaje'] = 'Usuario guardado';
        $_SESSION['tipo_mensaje'] = 'success'; 
        header("Location: index.php");   
    }

    

}
?>