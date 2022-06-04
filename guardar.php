<?php 

include("db.php");

if(isset($_POST['save'])){
    $inde = $_POST['ident2'];
    $nom = $_POST['nom'];
    $contra = $_POST['contra2'];

    $query = "INSERT INTO usuario(id, nombre, contrasena) VALUES ($inde,'$nom','$contra')";
    $result = mysqli_query($conn,$query);

    if(!$result){
        ?>
        <h3>Hola no dio</h3>
        <?php
        $_SESSION['mensaje'] = "No se pudo guardar";
        $_SESSION['tipo_mensaje'] = "danger";
        //die("Falló consulta.");
    }
    else{
        $_SESSION['mensaje'] = "Usuario guardado";
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: index.php");
}
?>