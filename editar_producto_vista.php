<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Productos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <?php include("navbar.php"); ?>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-1">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-100">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="text-center">
                                    <img src="assets/images/imagen_1.png" style="width: 185px;" alt="logo UN">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h4 class="mt-1 mb-5 pb-1">Editar producto</h4>
                                </div>

                                <div class="card-body p-md-5 mx-md-4">
                                    <?php
                                    $id = $_REQUEST['id'];
                                    $query = "SELECT * FROM producto WHERE id=$id";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result) ?>
                                    <?php include("formulario_editar_producto.php"); ?>
                                </div>

                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="card-body p-md-5 mx-md-4">
                                    <center>
                                        <h4>Para editar productos, cambie los cambios que desea editar y presione el bot??n "EDITAR PRODUCTO". </h4>
                                    </center>
                                    <br>
                                    <ul class="list-group">
                                        <li>NOTA: La imagen debe seleccionarse siempre, de lo contrario no se podr?? guardar el producto.</li><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>