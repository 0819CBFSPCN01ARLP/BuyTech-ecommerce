@extends('layouts.app')
@section('title','Mis compras')
@section('content')

<div class="m-4">
  @foreach ($compras as $compra)
    @foreach ($compra->productos as $producto)

      <div class="card mb-3 p-4" style="max-width:100%;">
        <div class="row no-gutters">
          <div class="col-md-2">
            <img src="..." class="card-img" alt="...">
          </div>

          <div class="col-md-8 border-left">
            <div class="card-body">
              <h5 class="card-title">Modelo {{$producto->modelo}} </h5>
              <p class="card-text">Detalles del producto {{$producto->detalle}}</p>
              <p class="card-text"><small class="text-muted">Fecha de compra {{$compra->fecha_de_compra}}</small></p>
            </div>
          </div>

          <div class="col-md-2 border-left">
            <div class="card-body">
              <h5 class="card-title">Precio {{$producto->precio}}</h5>
              <p class="card-text"><small class="text-muted">Total o lo que sea</small></p>
            </div>
          </div>
        </div>
      </div>

    @endforeach
  @endforeach


</div>
@endsection
