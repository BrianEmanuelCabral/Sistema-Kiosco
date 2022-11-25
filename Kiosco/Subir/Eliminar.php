<?php

    $id=$_REQUEST['product'];

    $conexion = mysqli_connect("localhost:3306", "root", "", "kiosco") or
    die("Hubo un problema al conectar a la base de datos.");

    mysqli_query($conexion, "DELETE FROM productos WHERE id=$id") or
    die ("error al modificar");

    echo "Se a borrrado correctamente la informacion.";

?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Subir Producto</title>
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
                  <a class="bi nav-link" aria-current="page" href="#">Nuevo Producto</a>
                </li>
                <li class="nav-item">
                  <a class="bi nav-link active" href="http://localhost/Kiosco/Subir/ListaProductos.php">Lista de Productos</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top: 5rem; width: 100vh;">
          <div class="card">
            <div class="card-header m-0">
              <h1 class="card-title text-center">Se ha eliminado el producto</h1>
            </div>
            <div class="card-body m-0 d-flex justify-content-center">
              <form action="http://localhost/Kiosco/Subir/ListaProductos.php" method="get">
                <button type="submit" class="btn btn-primary mb-3" name="enviar" value="Agregar">Volver</button> 
              </form>
            </div>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>