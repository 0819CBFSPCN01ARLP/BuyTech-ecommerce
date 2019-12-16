@extends('layouts.app')
@section('title','Detalle')

@section('content')
  <main class="container d-flex pb-5">

    <section class="col-sm-12 col-md-7 mt-4">
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
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </section>

    <section class="col-sm-12 col-md-5 col-lg-5 mt-4">
      <div class="jumbotron">
        <p>{{$producto->marca->descripcion}}</p>
        <h1 class="">{{$producto->modelo}}</h1>
        <p class="lead">$ {{$producto->precio}}</p>
        <hr class="my-4">
        <p>{{$producto->procesador->descripcion}}
          {{$producto->memoria->descripcion}}
          {{$producto->disco->descripcion}}
          {{$producto->pantalla->descripcion}}</p>
          <p> {{$producto->descripcion}}  </p>
          @auth
            <form class="border-top" action="" method="post">
              <div class="pt-3 pb-2">
                Cantidad:
                <select id="masSeis" class="" name="" required>
                  <option value="1">1 unidad</option>
                  <option value="2">2 unidades</option>
                  <option value="3">3 unidades</option>
                  <option value="4">4 unidades</option>
                  <option value="5">5 unidades</option>
                  <option value="6">+ de 6 unidades</option>
                </select>
                <input id="textomasseis" type="number" name="" value="" min="6" class="d-none">
              </div>
              <div class="pt-2">
              <a class="btn btn-primary" href="/carrito/{{$producto->id}}" role="button">Comprar</a>
              <a class="btn btn-outline-primary" href="" role="button">Agregar a carrito</a>
              </div>
            </form>
          @else
            <a id="compraGuest" class="btn btn-primary" href="" role="button"> Comprar</a>
            <a class="btn btn-outline-primary" href="" role="button">Agregar a carrito</a>
          @endauth



          @if (Auth::user())

            @if (Auth::user()->isAdmin() == 1)

              <a class="btn btn-primary btn-lg" href="/productos/{{$producto->id}}/edit" role="button">Editar</a>
              <form class="pt-3" action="" method="post" >
                @method("DELETE")
                @csrf
                <input type="hidden" value="{{$producto->id}}">
                <button type="submit" class="btn btn-danger btn-lg" name="button" onclick="confirm('Querés eliminar este producto?')">Eliminar</button>
              </form>
            @endif
          @endif

        </section>

      </main>
    @endsection
