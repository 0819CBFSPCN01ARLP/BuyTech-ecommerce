<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require("est/head.php") ?>
<body class="">
  <?php require("est/header.php") ?>

  <main class="text-center pt-5">
    <form class="form-signin" method="post">
      <!-- <img class="mb-4" src="img/logo-lg.png" alt="" width="100" height="100"> -->
      <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="" placeholder="Email" required="" autofocus=""><br>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" class="" placeholder="Contraseña" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
      </div>
      <button class="btn btn-lg btn-primary" type="submit">Sign in</button><br><br>
      <a href="#">He olvidado mi contraseña</a><br>
      <p class="mt-5 mb-3 text-muted">© BuyTech - 2019</p>
    </form>
  </main>

  <?php require("est/footer.php") ?>
</body>
</html>
