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
                                    <h4 class="mt-1 mb-5 pb-1">Crear productos</h4>
                                </div>
                                <div class="card-body p-md-5 mx-md-4">
                                    <?php include("formulario_productos.php"); ?>
                                </div>
                            </div>
                            <div class="col-lg-7 d-flex align-items-center gradient-custom-2">
                                <?php include('informacion_productos.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>