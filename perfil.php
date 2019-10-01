<?php
$rutaCss = "css/perfil.css";
$titulo = "Mi perfil";
require("funciones.php");
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
              <p class="card-text"><?php echo $_POST[name] ?></p>
              <p class="card-text"><?php echo $_POST[lastname]?></p>
              <p class="card-text"><?php echo $_POST[email]?></p>
              <p class="card-text"><?php echo $_POST[tel]?></p>
              <p class="card-text"><?php echo $_POST[birthday]?></p>
              <a href="perfil-edit.php">Editar</a>
            </div>

            <div class="col-md-6 mt-2">
              <h6 class="card-title dropdown-divider"></h5>
              <h5 class="card-title">Datos de facturación</h5>
              <p class="card-text">Nombre + Apellido</p>
              <p class="card-text">Dirección</p>
              <p class="card-text">Ciudad</p>
              <p class="card-text">País</p>
              <a href="perfil-edit.php">Editar</a>
            </div>

            <div class="col-md-6 mt-2">
              <h6 class="card-title dropdown-divider"></h5>
              <h5 class="card-title">Datos de envío</h5>
              <p class="card-text">Nombre + Apellido</p>
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
