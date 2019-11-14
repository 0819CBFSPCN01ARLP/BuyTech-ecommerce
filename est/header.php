
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
  <?php if(!isset($_SESSION["usuario"])): ?>
<!-- codigo para usuario no logueado -->
    <a class="dropdown-item p-2" href="registro.php">Creá tu cuenta</a>
    <a class="dropdown-item p-2" href="login.php">Ingresá</a>
  <?php else: ?>
<!-- codigo para usuario logueado -->
    <?php if(isset($_SESSION["admin"])): ?>

      <a class="dropdown-item p-2" href="perfil.php"><ion-icon name="person"></ion-icon></a>
      <a class="dropdown-item p-2" href="interfaz-altaproducto.php"> ADMIN<ion-icon name="cart"></ion-icon></a>
      <a class="dropdown-item p-2 text-muted text-decoration-none" href="logout.php">|  Salir</a>
    <?php else: ?>
      <a class="dropdown-item p-2" href="perfil.php"><ion-icon name="person"></ion-icon></a>
      <a class="dropdown-item p-2" href="carrito.php"><ion-icon name="cart"></ion-icon></a>
      <a class="dropdown-item p-2 text-muted text-decoration-none" href="logout.php">|  Salir</a>

    <?php endif ?>

<?php endif ?>
</div>
</header>
