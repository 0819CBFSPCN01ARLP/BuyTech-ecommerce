<?php
session_start();
require_once("pdo_admin/pdo.php");
  $rutaCss = "css/carrito.css";
  $titulo = "Carrito";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require("est/head.php") ?>

<body>
  <?php require("est/header.php") ?>
<main>
  <div class="card m-3 " style="">
    <div class="row no-gutters">

      <div class="col-md-3 border-right">
        <div class"m-3">
          <img src="https://http2.mlstatic.com/notebook-intel-netbook-cloudbook-ssd-32gb-windows-10-electroshows-D_NQ_NP_701761-MLA31462835396_072019-Q.jpg" class="card-img" alt="...">
        </div>
      </div>

      <div class="col-md-6 border-right">
        <div class="card-body">
          <h5 class="card-title">$producto</h5>
          <p class="card-text">Especificaciones del producto</p>
          <p class="card-text text-right"><small><a class="text-danger" href="#">Quitar artículo</a></small></p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-body">
          <h5 class="card-title">$$$</h5>
          <p class="card-text">eee</p>
          <p class="card-text"><small class="text-muted"> </small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card m-3 " style="">
    <div class="row no-gutters">

      <div class="col-md-3 border-right">
        <div class"m-3">
          <img src="https://http2.mlstatic.com/notebook-intel-netbook-cloudbook-ssd-32gb-windows-10-electroshows-D_NQ_NP_701761-MLA31462835396_072019-Q.jpg" class="card-img" alt="...">
        </div>
      </div>

      <div class="col-md-6 border-right">
        <div class="card-body">
          <h5 class="card-title">$producto</h5>
          <p class="card-text">Especificaciones del producto</p>
          <p class="card-text text-right"><small><a class="text-danger" href="#">Quitar artículo</a></small></p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-body">
          <h5 class="card-title">$$$</h5>
          <p class="card-text">eee</p>
          <p class="card-text"><small class="text-muted"> </small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card m-3 " style="">
    <div class="row no-gutters">

      <div class="col-md-3 border-right">
        <div class"m-3">
          <img src="https://http2.mlstatic.com/notebook-intel-netbook-cloudbook-ssd-32gb-windows-10-electroshows-D_NQ_NP_701761-MLA31462835396_072019-Q.jpg" class="card-img" alt="...">
        </div>
      </div>

      <div class="col-md-6 border-right">
        <div class="card-body">
          <h5 class="card-title">$producto</h5>
          <p class="card-text">Especificaciones del producto</p>
          <p class="card-text text-right"><small><a  class="text-danger" href="#">Quitar artículo</a></small></p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-body">
          <h5 class="card-title">$$$</h5>
          <p class="card-text">eee</p>
            <p class="card-text"><small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card m-3" style="">
      <div class="col-md-3 float-right">
        <div class="card-body">
          <h5 class="card-title">Total</h5>
          <p class="card-text">checkout</p>
          <p class="card-text"><small class="text-muted"> </small></p>
        </div>
      </div>
    </div>
  </div>
</main>

  <!-- <section id="titulo" class="row d-flex justify-content-center text-center">
    <h1 class="p-3"> Carrito de compras</h1>

  </section>
  <section id="tableContainer" class="container-fluid mt-4 pt-4 pr-0">
    <article id="producto" class="row table-responsive mt-3 pt-3">
      <table class="table table-striped bordes">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="#"><img class="imagen " src="https://placeimg.com/640/480/tech" alt=""></a> </th>
            <td>Producto 1</td>
            <td>$555</td>
            <td>1</td>
          </tr>
          <tr>
            <th scope="row"> <a href="#"><img class="imagen " src="https://placeimg.com/640/480/tech" alt=""> </a> </th>
            <td>Producto 2</td>
            <td>$888</td>
            <td>3</td>
          </tr>
        </tbody>
      </table>

    </article>
    <article class="row d-flex fondoAzul justify-content-end">
      <div id="total" class="mr-5 pl-3 pr-5 py-3 rounded">
        <h3 class="pr-3  py-2"> TOTAL </h3>
        <p class="pr-3  py-2"> $ XXX </p>
      </div>
    </article>
  </section> -->
<?php require("est/footer.php") ?>
</body>
</html>
