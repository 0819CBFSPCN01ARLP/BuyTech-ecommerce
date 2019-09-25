<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require("est/head.php") ?>
<body>
<?php require("est/header.php") ?>

  <!-- acá va el cuerpo de  la pagína, lista de productos -->
  <main class="container-fluid d-flex" style="padding-left: 0px;padding-right: 0px;">
    <nav class="col-md-2 col-lg-2 d-inline d-sx-none d-sm-none d-md-block bg-light container m-0">
      <div class="">
        <ul class="nav flex-column">
          <li class="nav-item">
            <br>Marca <br>
          <input type="checkbox" name="marca" value=""> Lenovo <br>
          <input type="checkbox" name="marca" value=""> HP <br>
          <input type="checkbox" name="marca" value=""> Asus <br>
          <input type="checkbox" name="marca" value=""> Acer <br> <br>
          </li>
          <li class="nav-item">
            Procesador <br>
            <input type="checkbox" name="Procesador" value=""> Core i5 <br>
            <input type="checkbox" name="Procesador" value=""> Core i7 <br>
            <input type="checkbox" name="Procesador" value=""> AMD <br>
            <input type="checkbox" name="Procesador" value=""> Intel Celeron <br><br>
          </li>
          <li class="nav-item">
            Tamaño de pantalla <br>
            <input type="checkbox" name="pantalla" value=""> 15.6 pulgadas <br>
            <input type="checkbox" name="pantalla" value=""> 14 pulgadas <br>
            <input type="checkbox" name="pantalla" value=""> 13.3 pulgadas <br>
            <input type="checkbox" name="pantalla" value=""> 14.1 pulgadas <br><br>
          </li>
          <li class="nav-item">
            Memoria RAM <br>
            <input type="checkbox" name="ram" value=""> De 4GB a 8GB <br>
            <input type="checkbox" name="ram" value=""> Menos de 4GB <br>
            <input type="checkbox" name="ram" value=""> Más de 8GB <br>
          </li>
        </ul>
      </div>
    </nav>

    <section class="col-md-10 row">
      <div class="card col-sm-12 col-md-3 col-lg-3 m-3" >
        <img src="https://images.fravega.com/s250/438f0f480558b68580f361267d598856.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Marca y modelo</h5>
          <h6 class="price"> $$$ </h6>
          <p class="card-text">Especificaciones básicas del modelo</p>
          <a href="detalle.html" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
      <div class="card col-sm-12 col-md-3 col-lg-3 m-3" >
        <img src="https://images.fravega.com/s250/438f0f480558b68580f361267d598856.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Marca y modelo</h5>
          <h6 class="price"> $$$ </h6>
          <p class="card-text">Especificaciones básicas del modelo</p>
          <a href="detalle.html" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
      <div class="card col-sm-12 col-md-3 col-lg-3 m-3" >
        <img src="https://images.fravega.com/s250/438f0f480558b68580f361267d598856.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Marca y modelo</h5>
          <h6 class="price"> $$$ </h6>
          <p class="card-text">Especificaciones básicas del modelo</p>
          <a href="detalle.html" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
      <div class="card col-sm-12 col-md-3 col-lg-3 m-3" >
        <img src="https://images.fravega.com/s250/438f0f480558b68580f361267d598856.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Marca y modelo</h5>
          <h6 class="price"> $$$ </h6>
          <p class="card-text">Especificaciones básicas del modelo</p>
          <a href="detalle.html" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
      <div class="card col-sm-12 col-md-3 col-lg-3 m-3" >
        <img src="https://images.fravega.com/s250/438f0f480558b68580f361267d598856.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Marca y modelo</h5>
          <h6 class="price"> $$$ </h6>
          <p class="card-text">Especificaciones básicas del modelo</p>
          <a href="detalle.html" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
      <div class="card col-sm-12 col-md-3 col-lg-3 m-3" >
        <img src="https://images.fravega.com/s250/438f0f480558b68580f361267d598856.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Marca y modelo</h5>
          <h6 class="price"> $$$ </h6>
          <p class="card-text">Especificaciones básicas del modelo</p>
          <a href="detalle.html" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>




    </section>

    <!-- <nav aria-label="mt-md-3 d-inline" class="mt-md-3">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><<</a>
        </li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">>></a>
        </li>
      </ul>
    </nav> -->



  </main>
<?php require("est/footer.php") ?>
</body>
</html>
