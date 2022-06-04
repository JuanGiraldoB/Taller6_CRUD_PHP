<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UNAL-Conection</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <?php include("navbar.php"); ?>
    <main>
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <?php if (isset($_SESSION['mensaje'])) { ?>
                                        <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                                            <?php echo $_SESSION['mensaje']; ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                                        </div>
                                    <?php session_unset();
                                    } ?>
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="assets/images/imagen_1.png" style="width: 185px;" alt="logo">
                                        </div>

                                        <center>
                                            <h4 class="mt-1 mb-5 pb-1">Registro Usuario</h4>
                                        </center>

                                        <!-- Formulario Registro -->
                                        <form action="guardar_usuario.php" , method="POST">

                                            <div class="mb-3">
                                                <label for="id" class="form-label">Identificación</label>
                                                <input type="number" class="form-control" id="id" name="id" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="contrasena" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="save">Registrarse</button>
                                            </div>
                                        </form>

                                        <!-- Enlace registrar -->
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿Ya tiene cuenta?</p><a href="index.php" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Iniciar Sesión</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <center>
                                            <h2>Beneficios</h2>
                                        </center>
                                        <br>
                                        <ul class="list-group">
                                            <li>Agregar productos <i class="bi bi-check-circle"></i></li><br>
                                            <li>Borrar productos <i class="bi bi-check-circle"></i></li><br>
                                            <li>Editar productos <i class="bi bi-check-circle"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="assets/scripts.js"></script>

</html>