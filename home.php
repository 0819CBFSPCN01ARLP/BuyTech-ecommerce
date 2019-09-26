<?php  
  $rutaCss = "css/homestyle.css";
  $titulo = "BuyTech Home";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once("est/head.php") ?>
<body style="width:100vw;"class="container-fluid m-0 p-0">
  <?php require_once("est/header.php") ?>

  <main class="container-fluid fondo">
    <section id="carrusel" class="row pt-2 ">
      <div id="slides" class="mx-auto col-sm-12 col-md-4 carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://placeimg.com/640/480/tech" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://placeimg.com/640/480/tech" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://placeimg.com/640/480/tech" alt="Third slide">
          </div>
        </div>
      </div>
    </section>
    <section id="categorias" class="row d-flex justify-content-around mt-3 mb-3  ">
      <div id="productContainer"class="row mx-3 px-3 rounded">

        <div class="col-12">
          <h2 id="titulo-categorias"class="text-center py-3 my-3 rounded"><a href="productos.html">Categorías</a> </h2>
        </div>
        <div id="imgcontainer" class="d-flex flex-row justify-content-between row pb-3">
          <div id="separadorDeProducto"class="col-xs-6 col-sm-3 col-md-2.5 px-auto mx-auto pb-4 rounded mx-1">
            <img id="imagenDeProducto"class="d-block " src="https://placeimg.com/640/480/tech" alt="producto">
            <h3 class="text-center">COMPUTADORAS</h3>
            <p class="text-center p-2"><a id="linkAProductos"href="productos.html">Ver más!</a></p>
          </div>
          <div id="separadorDeProducto"class="col-xs-6 col-sm-3 col-md-2.5 px-auto mx-auto pb-4 rounded mx-1">
            <img id="imagenDeProducto"class="d-block " src="https://placeimg.com/640/480/tech" alt="producto">
            <h3>CELULARES</h3>
            <p class="text-center p-2"><a id="linkAProductos"href="productos.html">Ver más!</a></p>
          </div>
          <div id="separadorDeProducto"class="col-xs-6 col-sm-3 col-md-2.5 px-auto mx-auto pb-4 rounded mx-1">
            <img id="imagenDeProducto"class="d-block " src="https://placeimg.com/640/480/tech" alt="producto">
            <h3> TABLETS</h3>
            <p class="text-center p-2"><a id="linkAProductos"href="productos.html">Ver más!</a></p>
          </div>
          <div id="separadorDeProducto"class="col-xs-6 col-sm-3 col-md-2.5 px-auto mx-auto pb-4 rounded mx-1">
            <img id="imagenDeProducto"class="d-block " src="https://placeimg.com/640/480/tech" alt="producto">
            <h3>OTROS</h3>
            <p class="text-center p-2"><a id="linkAProductos"href="productos.html">Ver más!</a></p>
          </div>
        </div>

      </div>

    </section>
    <section id="" class="d-none d-md-flex row">
      <div class="col-md-6 ">
        <h2> Ofertas especiales</h2>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

      </div>
      <div class="col-md-6 d-flex flex-column ">
        <img class=" w-75" src="https://placeimg.com/640/480/tech" alt="fotodecategoria">

      </div>



    </section>
    <section id="navbarMobile" class="row mt-3 d-block d-lg-none">
      <nav id="navbar" class="">
        <ul class=" nav  d-flex flex-column justify-content-end pb-5">
          <li class="nav-item ">
            <a class="nav-link text-center " href="LOGIN.html">LOGIN</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-center " href="REGISTRATE.html">REGISTRATE</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-center " href="carrito.html">CARRITO DE COMPRAS</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-center " href="#">PERFIL DE USUARIO</a>
          </li>
        </ul>
      </nav>

    </section>
  </main>

  <?php require("est/footer.php") ?>
</body>
</html>
