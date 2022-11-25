<?php 
  include ("User/Usuarios.php");

  $conexion=mysqli_connect("localhost:3306", "root", "", "kiosco");

  $prod1 = mysqli_query($conexion, "SELECT * from productos where id=1");
  $row1 = mysqli_fetch_array($prod1);

  $prod2 = mysqli_query($conexion, "SELECT * from productos where id=2");
  $row2 = mysqli_fetch_array($prod2);

  $prod3 = mysqli_query($conexion, "SELECT * from productos where id=3");
  $row3 = mysqli_fetch_array($prod3);

  if ($userLog == false){
    $perfilTxt = "Iniciar Sesión";
  } else {
    $perfilTxt = "Perfil";
  }
  if ($userLog == false){
    $perfilLink = "login.html";
  } else {
    $perfilLink = "perfil.html";
  }
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Kiosco</title>
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
                  <a class="bi bi-cart4 nav-link" aria-current="page" href="carrito.html">Mi Carrito</a>
                </li>
                <li class="nav-item">
                  <a class="bi bi-person nav-link" href='<?php echo "$perfilLink" ?>'><?php echo "$perfilTxt" ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top: 5rem; margin-bottom: 2rem">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" style="background-color:#0d6efd" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" style="background-color:#0d6efd" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" style="background-color:#0d6efd" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="http://localhost/Kiosco/productoIndividual.php?product=1">
              <div class="card d-flex justify-content-center flex-row">
                <img src="<?php echo "$row1[imagen]"?>.jpg" class="card-img" style="width: 200px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="text-dark"><?php echo "$row1[nombre]"; ?></h1>
                </div>
              </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="http://localhost/Kiosco/productoIndividual.php?product=2">
              <div class="card d-flex justify-content-center flex-row">
                <img src="<?php echo "$row2[imagen]"?>.jpg" class="card-img" style="width: 200px" alt="...">
                <div class="card-img-overlay">
                </div>
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="text-dark"><?php echo "$row2[nombre]"; ?></h1>
                </div>
              </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="http://localhost/Kiosco/productoIndividual.php?product=2">
              <div class="card d-flex justify-content-center flex-row">
                <img src="<?php echo "$row3[imagen]"?>.jpg" class="card-img" style="width: 200px" alt="...">
                <div class="card-img-overlay">
                </div>
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="text-dark"><?php echo "$row3[nombre]"; ?></h1>
                </div>
              </div>
            </a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        <div class="row d-flex justify-content-around mt-5">
          <div class="col-3">
            <a href="http://localhost/Kiosco/productos.php">
              <div class="card text-bg-dark">
                <img src="https://i.picsum.photos/id/499/200/300.jpg?hmac=KWCVeuvGZEdEyxpon_0lUlQ2hJzA3Tli3AQTLM5RLXA" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title fs-custom-card">Comidas</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-3">
            <a href="http://localhost/Kiosco/productos.php">
              <div class="card text-bg-dark">
                <img src="https://i.picsum.photos/id/499/200/300.jpg?hmac=KWCVeuvGZEdEyxpon_0lUlQ2hJzA3Tli3AQTLM5RLXA" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title fs-custom-card">Bebidas</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-3">
            <a href="http://localhost/Kiosco/productos.php">
              <div class="card text-bg-dark">
                <img src="https://i.picsum.photos/id/499/200/300.jpg?hmac=KWCVeuvGZEdEyxpon_0lUlQ2hJzA3Tli3AQTLM5RLXA" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title fs-custom-card">Productos de kiosco</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>