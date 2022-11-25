<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Lista de Productos</title>
  </head>
  <body>
    <div class="h-100 w-100">
      <nav class="navbar navbar-expand-lg border-bottom border-primary bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">App Kiosco</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Kiosco</h5>
            </div>
            <hr class="mx-3 my-0 d-lg-none">
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="bi nav-link" href="NuevoProducto.html">Nuevo Producto</a>
                </li>
                <li class="nav-item">
                  <a class="bi nav-link active" aria-current="page" href="#">Lista de Productos</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top: 5rem; margin-bottom: 2rem">
        <div class="row mt-5" id="listaProductos">
          <?php 

          $conexion=mysqli_connect("localhost:3306", "root", "", "kiosco");

          $registros = mysqli_query($conexion, "SELECT * from productos");

          while($row = mysqli_fetch_array($registros)){ ?>

            <div class="col-12">
              <div class="card mb-3">
                <div class="row g-0 d-flex justify-content-center">
                  <div class="col-auto">
                    <img src="<?php echo "$row[imagen]"?>.jpg" style="max-width: 200px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      <a href="productoIndividual.html" style="text-decoration: none;"><h5 class="card-title text-black"><?php echo "$row[nombre]"; ?></h5></a>
                      <p class="card-text"><small class="text-muted"><?php echo "$row[precio]"; ?></small></p>
                      <p class="card-text"><small class="text-muted"><?php echo "$row[cantidad] unidades"; ?></small></p>
                      <div class="row justify-content-between">
                        <div class="col-auto">
                          <form action="http://localhost/Kiosco/productoIndividual.php" method="get">
                            <button class="btn btn-primary" type="submit" name="product" value="<?php echo "$row[id]"; ?>">Ver producto</button>
                          </form>
                        </div>
                        <div class="col-auto d-flex">
                          <form action="http://localhost/Kiosco/Subir/Modificar.php" method="get">
                            <button class="btn btn-success" type="submit" name="product" value="<?php echo "$row[id]"; ?>">Modificar</button>
                          </form>
                          <form action="http://localhost/Kiosco/Subir/Eliminar.php" method="get">
                            <button class="btn btn-danger" type="submit" name="product" value="<?php echo "$row[id]"; ?>">Eliminar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }
          mysqli_close($conexion);?>            
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        var col = $('<div class="col-12"></div>');
        $('#listaProductos').append(col);
    </script>
  </body>
</html>