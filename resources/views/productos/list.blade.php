@extends('layouts.app')
@section('title','Productos')

@section('content')

  <main class="container-fluid d-flex" style="padding-left: 0px;padding-right: 0px;">

    {{-- SIDEBAR ---> Convertir en un formulario para filtrar productos --}}
    <nav class="col-sm-3 col-md-2 col-lg-2  d-md-block container m-0">
      <div class="position-absolute">
        <form class="" action="/productos/filtered" method="get">
          @csrf
          <ul class="nav flex-column">
            <li class="nav-item">
              <br>Marca <br>
              @foreach ($marcas as $marca)
                <input type="checkbox" name="{{$marca->descripcion}}" value="{{$marca->id}}"> {{$marca->descripcion}} <br>
              @endforeach

            </li>
            <li class="nav-item">
              Procesador <br>
              @foreach ($procesadores as $procesador)
                <input type="checkbox" name="{{$procesador->descripcion}}" value="{{$procesador->id}}"> {{$procesador->descripcion}}<br>
              @endforeach

            </li>
            <li class="nav-item">
              Tamaño de pantalla <br>
              @foreach ($pantallas as $pantalla)
                <input type="checkbox" name="{{$pantalla->descripcion}}" value="{{$pantalla->id}}"> {{$pantalla->descripcion}} <br>
              @endforeach

            </li>
            <li class="nav-item">
              Memoria RAM <br>
              @foreach ($memorias as $memoria)
                <input type="checkbox" name="{{$memoria->descripcion}}" value="{{$memoria->id}}">{{$memoria->descripcion}} <br>
              @endforeach

            </li>
            <li class="nav-item">
              Disco <br>
              @foreach ($discos as $disco)
                <input type="checkbox" name="{{$disco->descripcion}}" value="{{$disco->id}}">  {{$disco->descripcion}}<br>
              @endforeach

            </li>
          </ul>
          <div class="pt-3">
            <input class="btn btn-sm" type="submit" name="" value="Aplicar filtro">
            <input class="btn btn-sm" type="button" name="" value="Limpiar">
          </div>
        </form>
      </div>
    </nav>

    {{-- Tarjeta de producto --}}
    <section class="col-sm-9 col-md-10 row ">
      @foreach ($productos as $producto)
        <div class="card border-0 shadow-sm col-sm-5 col-md-4 col-lg-3 m-3" >
          <img src="https://images.fravega.com/s250/438f0f480558b68580f361267d598856.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$producto->modelo}}</h5>
            <h6 class="price"> $ {{$producto->precio}} </h6>
            <p class="card-text">{{$producto->marca->descripcion}} {{$producto->procesador->descripcion}} {{$producto->memoria->descripcion}} {{$producto->disco->descripcion}} {{$producto->pantalla->descripcion}}</p>
            <a href="/productos/{{$producto->id}}" class="btn btn-primary">Ver detalle</a>
          </div>
        </div>
      @endforeach

      <div class="row d-block container justify-content-center">
        {{$productos->links()}}
      </div>
    </section>
  </main>
@endsection
