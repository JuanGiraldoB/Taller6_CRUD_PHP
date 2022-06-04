<?php include("db.php"); 

if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query = "DELETE FROM producto WHERE id = $id";
    $result = mysqli_query($conn, $query);

    header("Location: pagina_usuario.php");

}

?>