<?php
session_start();

$titulo = "Mi perfil";
//Si está iniciada la sesión, traer el array de usuario y comparar la data en Session con los mails
if (isset($_SESSION["usuario"])) {
  $jsonUsuarios = file_get_contents("usuarios.json");
  $arrayDeUsuarios = json_decode($jsonUsuarios, true);
  foreach ($arrayDeUsuarios as $usuario) {
    if ($_SESSION["usuario"] == $usuario["email"]) {
      $_SESSION["name"] = $usuario["name"];
      $_SESSION["lastname"] = $usuario["lastname"];
      // $_SESSION["imagen"] = $usuario["profile"];
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once("est/head.php") ?>
<body>
  <?php require("est/header.php") ?>
  <main>
      <div class="card m-5" style="">

      <div class="row no-gutters container p-4">
        <div class="col-sm-0 pt-4 col-md-2">
          <img src="img/profile.jpg" class="rounded-circle card-img " alt="...">
          <div class="p-2 text-center">
            <a href="perfil-edit.php" class="">Cambiar foto</a>
          </div>
        </div>

        <div class="col-md-10">
          <div class="card-body row">
            <div class="col-md-6 mt-2">
              <h6 class="card-title dropdown-divider"></h5>
              <h5 class="card-title">Datos personales</h5>
              <p class="card-text">Nombre: <?= $_SESSION["name"]  ?></p>
              <p class="card-text">Apellido: <?= $_SESSION["lastname"]?></p>
              <p class="card-text">Email: <?=$_SESSION["usuario"]?></p>
              <p class="card-text">Celular</p>
              <p class="card-text">Fecha de nacimiento</p>
              <a href="perfil-edit.php">Editar</a>
            </div>

            <div class="col-md-6 mt-2">
              <h6 class="card-title dropdown-divider"></h5>
              <h5 class="card-title">Datos de facturación</h5>
              <p class="card-text">Nombre + Apellido: <?= $_SESSION["name"] . " " . $_SESSION["lastname"]?></p>
              <p class="card-text">Dirección</p>
              <p class="card-text">Ciudad</p>
              <p class="card-text">País</p>
              <a href="perfil-edit.php">Editar</a>
            </div>

            <div class="col-md-6 mt-2">
              <h6 class="card-title dropdown-divider"></h5>
              <h5 class="card-title">Datos de envío</h5>
              <p class="card-text">Nombre + Apellido: <?= $_SESSION["name"] . " " . $_SESSION["lastname"]?></p>
              <p class="card-text">Dirección</p>
              <p class="card-text">Ciudad</p>
              <p class="card-text">País</p>
              <a href="perfil-edit.php">Editar</a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </main>
</body>
<?php require("est/footer.php") ?>
</html>
