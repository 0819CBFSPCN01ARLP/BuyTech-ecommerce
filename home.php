<?php
  $rutaCss = "";
  $titulo = "BuyTech Home";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require_once("est/head.php") ?>

<body>

  <?php require("est/header.php") ?>

  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide vh-50" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://images.pexels.com/photos/2733663/pexels-photo-2733663.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!-- <a href="productos.php">
              <h5>Ir a ver celulares</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </a> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.pexels.com/photos/196649/pexels-photo-196649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!-- <a href="productos.php">
              <h5>Ir a ver tablets</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </a> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.pexels.com/photos/461077/pexels-photo-461077.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <!-- <a href="productos.php">
            <h5>Ir a ver notebooks</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </a> -->
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container marketing  mt-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect fill="#777" width="100%" height="100%" fill="#"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2></h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver celulares</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2></h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver notebooks</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2></h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver tablets</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>

    <!-- <section id="carrusel" class="row pt-2 ">
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
    </section> -->

    <!--
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
    </section> -->

  <?php require("est/footer.php") ?>
</body>
</html>
