@extends('layouts.app')
@section('title','Productos')

@section('content')
  <main class="container-fluid d-flex" style="padding-left: 0px;padding-right: 0px;">

    {{-- SIDEBAR ---> Convertir en un formulario para filtrar productos --}}
    <nav class=" col-md-2 col-lg-2 d-inline d-xs-none d-sm-none d-md-block container m-0">
      <div class="position-fixed">
        <form class="" action="" method="post">
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
        <div class="pt-3">
          <input class="btn " type="submit" name="" value="Aplicar filtro">
          <input class="btn "type="button" name="" value="Limpiar">
        </div>
      </form>
      </div>
    </nav>

{{-- Tarjeta de producto --}}
    <section class="col-md-10 row">
      @foreach ($productos as $producto)
      <div class="card col-sm-12 col-md-3 col-lg-3 m-3" >
        <img src="https://images.fravega.com/s250/438f0f480558b68580f361267d598856.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$producto -> modelo}}</h5>
          <h6 class="price"> $ {{$producto -> precio}} </h6>
          <p class="card-text">Especificaciones básicas del modelo</p>
          <a href="/productos/{{$producto->id}}" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
    @endforeach
    <div class="d-block float-right">
      {{$productos->links()}}
    </div>
    </section>
@endsection
