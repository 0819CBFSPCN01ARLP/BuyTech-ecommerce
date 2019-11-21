<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <!-- bootstrap CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat:500&display=swap" rel="stylesheet">


  <title>@yield('title')</title>
</head>

<header class="navbar navbar-expand-sm navbar-dark bg-light">
  <div class="">
    <a class="navbar-brand" href="index.php"><img src="img/logo-lg.png" class="img-fluid w-25" alt=""></a>
  </div>
  <button class="navbar-toggler bg-secondary float-right" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

    </ul>
  <form class="form-inline my-2 my-md-0">
    <input class="form-control" type="text" placeholder="Buscar">
  </form>

</div>
</header>
<body> @yield("main")</body>
<footer class="footer mt-auto py-3 bg-info">
  <div class="container text-center">
    <span><a href="contacto.php" class="text-light ">CONTACTO -</a></span>
    <span><a href="contacto.php" class="text-light">NOSOTROS -</a></span>
    <span><a href="faq.php" class="text-light">PREGUNTAS FRECUENTES</a></span>
  </div>
</footer>
