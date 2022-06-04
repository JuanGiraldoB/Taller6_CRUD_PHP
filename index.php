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
  <link rel="stylesheet" href="assets/styles.css">
</head>

<body>

  <main>
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                      <img src="assets/images/imagen_1.png" style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">Inicio de Sesión</h4>
                    </div>

                    <form action="pagina_usuario.php">
                      <p>Ingreso de datos</p>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="ident">Identificación</label>
                        <input type="text" id="ident" class="form-control" placeholder="Número de identificación" />
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="contra">Contraseña</label>
                        <input type="password" id="contra" class="form-control" />
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Entrar</button>
                      </div>

                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">¿No se ha registrado?</p>
                        <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Registrar</button>
                      </div>

                    </form>

                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <table class="table align-middle table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio de venta</th>
                        <th scope="col">Imagen</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query = "SELECT * FROM producto";
                      $result = mysqli_query($conn, $query);

                      while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                          <td><?php echo $row['id'] ?></td>
                          <td><?php echo $row['nombre'] ?></td>
                          <td><?php echo $row['precio_venta'] ?></td>
                          <td>
                            <img width="100" src="data:image/png;base64,<?php echo  base64_encode($row['imagen']); ?>">
                          </td>
                        </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

</body>

</html>