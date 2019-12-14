@extends('layouts.app')
@section('title','Buytech')
@section('content')

  <div id='home' class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide vh-50" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/notebook.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <a href="/productos"><h2 class="text-decoration-none text-white">Ver notebooks</h2></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/phone.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <a href="/productos"><h2 class="text-decoration-none text-white">Ver celulares</h2></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/tablet.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <a href="/productos"><h2 class="text-decoration-none text-white">Ver tablets</h2></a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
    </div>
  </div>

  <div class="container marketing">

 {{-- Barra con acceso a productos en version movile --}}
    <div class="d-block d-sm-none pt-3">
      <a href="/productos">
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row no-gutters">
          <div class="col-md-12">
            <img src="/img/computer.svg" class="card-img p-3" alt="Productos" style="max-width:">
          </div>
          <div class="">
            <div class="card-body d-block card-img-overlay">
              <h5 class="card-title">Ver notebooks</h5>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>

    <div class="d-block d-sm-none pt-3">
      <a href="/productos">
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row no-gutters">
          <div class="col-md-12">
            <img src="/img/phone.svg" class="card-img p-3" alt="Productos" style="max-width:">
          </div>
          <div class="">
            <div class="card-body d-block card-img-overlay">
              <h5 class="card-title">Ver celulares</h5>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>

    <div class="d-block d-sm-none pt-3">
      <a href="/productos">
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row no-gutters">
          <div class="col-md-12">
            <img src="/img/tablet.svg" class="card-img p-3" alt="Productos" style="max-width:">
          </div>
          <div class="">
            <div class="card-body d-block card-img-overlay">
              <h5 class="card-title">Ver tablets</h5>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"> Nuevos ingresos <span class="text-muted">que no te podes perder</span></h2>
        <p class="lead"> Texto texto </p>
      </div>

      <div id="carouselExampleControls" class="carousel slide col-md-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/phone.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/phone.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/phone.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        {{-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a> --}}
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

@endsection
