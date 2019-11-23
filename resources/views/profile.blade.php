@extends('layouts.app')
@section('title','Perfil')

@section('content')
  <main>
      <div class="card m-5" style="">

      <div class="row no-gutters container p-4">
        <div class="col-sm-0 pt-4 col-md-2">
          <img src="" class="rounded-circle card-img " alt="...">
          <div class="p-2 text-center">
            <a href="perfil-edit.php" class="">Cambiar foto</a>
          </div>
        </div>

        <div class="col-md-10">
          <div class="card-body row">
            <div class="col-md-6 mt-2">
              <h5 class="card-title dropdown-divider"></h5>
              <h5 class="card-title">Datos personales</h5>
              <p class="card-text">Nombre: </p>
              <p class="card-text">Apellido: </p>
              <p class="card-text">Email: </p>
              <p class="card-text">Celular: </p>
              <a href="perfil-edit.php">Editar</a>
            </div>

            <div class="col-md-6 mt-2">
              <h5 class="card-title dropdown-divider"></h5>
              <h5 class="card-title">Datos de facturación y envío</h5>
              <p class="card-text">Nombre + Apellido: ]</p>
              <p class="card-text">Dirección:</p>
              <p class="card-text">Ciudad:</p>
              <p class="card-text">Código Postal: </p>
              <p class="card-text">País: </p>
              <a href="perfil-edit.php">Editar</a>
            </div>

            <!-- <div class="col-md-6 mt-2">
              <h6 class="card-title dropdown-divider"></h5>
              <h5 class="card-title">Datos de envío</h5>
              <p class="card-text">Nombre + Apellido: </p>
              <p class="card-text">Dirección</p>
              <p class="card-text">Ciudad</p>
              <p class="card-text">País</p>
              <a href="perfil-edit.php">Editar</a>
            </div> -->

          </div>
        </div>

      </div>
    </div>
  </main>

@endsection
