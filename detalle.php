<?php
  session_start();
  $rutaCss = "";
  $titulo = "Detalle";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require("est/head.php") ?>
<body>
  <!-- acá va la barra de navegación -->
<?php require("est/header.php") ?>

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
<?php require("est/footer.php") ?>
</body>
</html>
