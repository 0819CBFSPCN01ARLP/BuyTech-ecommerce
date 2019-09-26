<?php
  $rutaCss = "";
  $titulo = "Crea tu cuenta";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once("est/head.php") ?>
<body class="">

  <?php require_once("est/header.php") ?>

  <main class="text-center pt-5">
    <div class="">
      <form class="form-signin" action="validaciones.php" method="post" enctype="multipart/form-data">
        <!-- <img class="mb-4" src="img/logo-lg.png" alt="" width="100" height="100"> -->
        <h1 class="h3 mb-3 font-weight-normal">Creá tu cuenta</h1>

        <div class="p-1">
          <label for="" class="sr-only">Nombre</label>
          <input type="" id="" class="" name="name" placeholder="Nombre" required=""><br>
        </div>

        <div class="p-1">
          <label for="" class="sr-only">Apellido</label>
          <input type="" id="" class="" name="lastname" placeholder="Apellido" required=""><br>
        </div>

        <div class="p-1">
          <label for="inputUsername" class="sr-only">Email</label>
          <input type="username" id="inputUsername" name="email" class="" placeholder="Email" required=""><br>
        </div>

        <div class="p-1">
          <label for="inputPassword" class="sr-only">Contraseña</label>
          <input type="password" id="inputPassword" class="" name="password" placeholder="Contraseña" required=""><br>
        </div>

        <div class="p-1">
          <label for="inputImg" class="sr-only">Selecciona una imagen de perfil</label>
          <input type="file" name="profile" value=""><br>
        </div>

        <div class="checkbox p-1">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <input class="btn btn-lg btn-primary" type='submit' name='Submit' value='Crear cuenta' />
        <p class="mt-5 mb-3 text-muted">© BuyTech - 2019</p>
      </form>
    </div>
  </main>

<?php require("est/footer.php") ?>
</body>
</html>
