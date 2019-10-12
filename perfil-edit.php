<?php
session_start();

$titulo = "Mi perfil";


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
            <a href="#" class="">Cambiar foto</a>
          </div>
        </div>

        <div class="col-md-10">
          <div class="card-body row">

            <div class="col-md-6 mt-2">
              <form c action="funciones.php" method="post">
                <h6 class="card-title dropdown-divider"></h5>
                <h5 class="card-title">Datos personales</h5>
                <p><input type="text" name="name" value="" placeholder="Nombre"></p>
                <p><input type="text" name="lastname" value="" placeholder="Apellido"></p>
                <p><input type="email" name="email" value="" placeholder="Email"></p>
                <p><input type="tel" name="tel" value="" placeholder="Celular"></p>
                <p><input type="text" name="birthday" value="" placeholder="26/02/1997"></p>
                <input class="btn btn-light"type="submit" name="" value="Guardar cambios">
              </form>
            </div>

            <div class="col-md-6 mt-2">
              <form class="" action="index.html" method="post">
                <h6 class="card-title dropdown-divider"></h5>
                <h5 class="card-title">Datos de facturación</h5>
                <p><input type="text" name="name" value="" placeholder="Nombre"></p>
                <p><input type="text" name="lastname" value="" placeholder="Apellido"></p>
                <p><input type="text" name="direc" value="" placeholder="Dirección"></p>
                <p><input type="text" name="city" value="" placeholder="Ciudad"></p>
                <p><input type="text" name="country" value="" placeholder="País"></p>
                <input class="btn btn-light"type="submit" name="" value="Guardar cambios">
              </form>
            </div>

            <div class="col-md-6 mt-2">
              <form class="" action="index.html" method="post">
                <h6 class="card-title dropdown-divider"></h5>
                <h5 class="card-title">Datos de envío</h5>
                <p><input type="text" name="name" value="" placeholder="Nombre"></p>
                <p><input type="text" name="lastname" value="" placeholder="Apellido"></p>
                <p><input type="text" name="direc" value="" placeholder="Dirección"></p>
                <p><input type="text" name="city" value="" placeholder="Ciudad"></p>
                <p><input type="text" name="country" value="" placeholder="País"></p>
                <input class="btn btn-light"type="submit" name="" value="Guardar cambios">
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>
</body>
<?php require("est/footer.php") ?>
</html>
