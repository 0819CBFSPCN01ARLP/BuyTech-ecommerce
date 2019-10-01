<?php

$titulo = "Registro exitoso";



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require_once("est/head.php") ?>
  <body>
    <?php require_once("est/header.php") ?>

    <h1 class="justify-center mx-auto my-3" >El registro ha sido exitoso!</h1>
    <div class="row">

      <div class="col-xs-12 col-md-4 mx-auto my-3" text-align = center>
        <ul class="navbar-nav mx-auto float-right">
          <li class="nav-item active">
            <h3>Completá tu perfil <a class="text-decoration-none nav-link" href="perfil.php">aquí</a> </h2>
          </li>
          <li class="nav-item active "><h3>O ingresá a <a class="nav-link tex-decoration-none" href="login.php"> tu cuenta</a></h3>
          </li>
        </ul>
      </div>
    </div>

    <?php require("est/footer.php") ?>
  </body>
</html>
