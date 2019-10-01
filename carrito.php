<?php
session_start();
  $rutaCss = "css/carrito.css";
  $titulo = "Carrito";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require("est/head.php") ?>

<body>
  <?php require("est/header.php") ?>

  <section id="titulo" class="row d-flex justify-content-center text-center">
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
            <!-- <th scope="col">Total</th> -->
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
  </section>
<?php require("est/footer.php") ?>
</body>
</html>
