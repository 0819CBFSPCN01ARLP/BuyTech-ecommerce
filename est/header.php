<header class="navbar navbar-expand-sm navbar-dark bg-light">
  <div class="">
    <a class="navbar-brand" href="home.php"><img src="img/logo-lg.png" class="img-fluid w-25" alt=""></a>
  </div>
  <button class="navbar-toggler bg-secondary float-right" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
  <div class="dropdown-menu" aria-labelledby="dropdown03">
  <a class="dropdown-item" href="#">Action</a>
  <a class="dropdown-item" href="#">Another action</a>
  <a class="dropdown-item" href="#">Something else here</a>
</div>
</li> -->
</ul>
<form class="form-inline my-2 my-md-0">
  <input class="form-control" type="text" placeholder="Buscar">
</form>
<?php if(!isset($_SESSION["usuario"])): ?>
<!-- codigo para usuario no logueado -->
<a class="dropdown-item p-2" href="registro.php">Creá tu cuenta</a>
<a class="dropdown-item p-2" href="login.php">Ingresá</a>
<?php else: ?>
<!-- codigo para usuario logueado -->
<a class="dropdown-item p-2" href="perfil.php">Perfil<ion-icon name="person"></ion-icon></a>
<a class="dropdown-item p-2" href="carrito.php">Carrito <ion-icon name="cart"></ion-icon></a>
<a class="dropdown-item p-2 text-muted text-decoration-none" href="logout.php">Salir</a>
<?php endif ?>
</div>
</header>
