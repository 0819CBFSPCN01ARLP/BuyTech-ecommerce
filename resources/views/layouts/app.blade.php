<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  {{-- model javascript prueba --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vex-js/4.1.0/css/vex.css" integrity="sha256-/eaLySG/rPCowjMWyStmTPGtaU79NKiqodgU2X/PJ/g=" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vex-js/4.1.0/js/vex.combined.min.js" integrity="sha256-qObWTmBVvSj8Kh/R02uSsIcrO5B2Bow7/taqyDFHqXc=" crossorigin="anonymous"></script>
  <script>vex.defaultOptions.className = 'vex-theme-os'</script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vex-js/4.1.0/css/vex-theme-os.css" integrity="sha256-UmUajlAwWHI+dgAKG5ptMD1Sp9J3dT0rk81lid9QWkU=" crossorigin="anonymous" />

</head>
<body>
  <div class="sticky-top" id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" class="px-0 mr-0" style="width:50%">
          <img src="/img/logo.png" class="img-fluid w-25 mx-0 pt-2 pb-1" alt="logo">
          {{-- {{ config('app.name', 'Laravel') }} --}}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

            <form action=" " method="GET" role="search">
              {{ csrf_field() }}
              <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder="¿Qué buscas?">
                <span class="input-group-btn pl-1">
                  <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-search"><ion-icon name="search"></ion-icon></span>
                  </button>
                </span>
              </div>
            </form>

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Ya tengo cuenta') }}</a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  Mi cuenta: {{Auth::user()->nombre }} {{Auth::user()->apellido}} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/profile/{{Auth::user()->id}}">
                    Mi cuenta
                  </a>
                  {{-- Están vacios pero quería agregar mas opciones para que quede mas lindo --}}
                  <a class="dropdown-item" href="{{ url('/compras') }}">
                    Compras
                  </a>
                  @if (Auth::user()->isAdmin() == 1)

                    <a class="dropdown-item" href="/productos/add">
                      Añadir producto
                    </a>
                  @endif

                  <div class="dropdown-divider"></div>
                  {{-- BOTÓN PARA CERRAR SESIÓN --}}
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
</div>

{{-- <div class="">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
  </nav>
</div> --}}

<main class="">
  @yield('content')
</main>
</div>

<footer class="footer mt-auto p-3 bg-info">
  <div class="container text-center">
    <span><a href="/contacto" class="text-white">CONTACTO </a></span> -
    <span><a href="/faq" class="text-white">PREGUNTAS FRECUENTES</a></span>
  </div>
</footer>

<script src="{{ URL::asset('js/buytech.js') }}" type="text/javascript"> </script>
<script src="{{ URL::asset('js/listadoProvincias.js') }}" type="text/javascript"></script>

</body>
</html>
