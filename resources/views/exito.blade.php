@extends('layouts.app')
@section('title', 'Compra exitosa!')
@section('content')

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-4 text-success">Compra exitosa!</h1>
      <p>En minutos te llegará un mail con todos los datos tu compra.</p>
      <p><a class="btn btn-md text-secondary" href="/" role="button">Volver al home »</a></p>
    </div>
  </div>


  {{-- <div class="container-fluid"> --}}
    <div class="row">

    <div class="col-12 col-md-4 pt-3">
      <a href="/productos">
        <div class="card mb-3 border-0 shadow-sm" style="max-height: 300px;">
          <div class="row no-gutters">
            <div class="col-md-12">
              <img src="/img/computer.svg" class="card-img p-3" alt="Productos" style="max-height: 300px">
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

    <div class="col-12 col-md-4 pt-3">
      <a href="/productos">
        <div class="card mb-3 border-0 shadow-sm" style="max-height: 300px;">
          <div class="row no-gutters">
            <div class="col-md-12">
              <img src="/img/phone.svg" class="card-img p-3" alt="Productos" style="max-height: 300px">
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

    <div class="col-12 col-md-4 pt-3">
      <a href="/productos">
        <div class="card mb-3 border-0 shadow-sm" style="max-height: 300px;">
          <div class="row no-gutters">
            <div class="col-md-12">
              <img src="/img/tablet.svg" class="card-img p-3" alt="Productos" style="max-height: 300px">
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

    </div>
  {{-- </div> --}}

@endsection
