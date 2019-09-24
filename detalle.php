<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require("est/head.php") ?>
<body>
  <!-- acá va la barra de navegación -->
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="home.html"> <img src="img/logo-lg.png" alt="BuyTech" width="100vw"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse float-right" id="navbarsExample04">
        <form class="form-inline my-2 my-md-0  margin-center">
          <input class="form-control" type="text" placeholder="Buscar...">
        </form>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="perfil.html"><ion-icon name="person"></ion-icon> Perfil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carrito.html"><ion-icon name="cart">ho</ion-icon>Carrito</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div> -->
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- acá va la barra de filtro y ubicación (compus -> asus -> etc) -->

  <!-- acá va el cuerpo de  la pagína, detalle del producto-->
  <main class="container-fluid d-flex">
    <section class="col-sm-12 col-md-7 col-lg-7 mt-4">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner card p-6">
          <div class="carousel-item active">
            <img src="https://images.fravega.com/f300/ca2c8f15ccc1e1701990c241e6d3af23.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.fravega.com/f300/bcb8fb483751f1bf0c5161d6a6df7d3e.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.fravega.com/f300/133a63cc4d741f12a96af406e8013451.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section class=" col-md-5 col-lg-5 mt-4">
      <div class="jumbotron">
        <p>Lenovo</p>
        <h1 class="">Notebook Lenovo 15, 6” Core I5 RAM 8G 1TB S145-81MV002A</h1>
        <p class="lead">$$$</p>
        <hr class="my-4">
        <p> Su procesador Intel core i5 junto con su memoria RAM de 8 GB, se complementan y ofrecen el máximo rendimiento con mejor consumo de energía. A su vez que permite ejecutar cualquier tarea con facilidad. También, guarda tu contenido multimedia y programas favoritos en el disco rígido de 1 TB.  </p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Comprar</a>
      </div>
    </section>

  </main>
  <!-- acá va el footer -->
  <footer class="footer mt-auto py-3 bg-info">
    <div class="container justify-center">
      <span class="m-5"><a href="#" class="text-light">CONTACTO</a></span>
      <span class="m-5"><a href="#" class="text-light">NOSOTROS</a></span>
      <span class="m-5"><a href="#" class="text-light">PREGUNTAS FRECUENTES</a></span>
    </div>
  </footer>
</body>
</html>
