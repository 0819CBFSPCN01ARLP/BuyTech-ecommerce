<?php
  session_start();

  $rutaCss = "logincss.css";

  $titulo = "Ingresar";
  // require("funciones.php");



require_once "validaciones.php";

$email = null;

//Cambio count por sólo $_POST acá y en línea 22
if(count($_POST)){

  $email = trim($_POST ["email"]);

//array de errores

  $erroresRegistro = validarLogin();

//Si no hay error
  if (!count($erroresRegistro)){
    $_SESSION["usuario"] = $email;
    header("location: perfil.php");
    exit;

  }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require("est/head.php") ?>
<body class="">
  <?php require("est/header.php") ?>

  <main class="text-center pt-5">

    <?php
    //Si existen errores en el formulario, redireccion
     if(isset($erroresRegistro) && count($erroresRegistro)>0):  ?>
          <ul>
              <?php foreach($erroresRegistro as $unError): ?>
                <li><?= $unError;?></li>
              <?php endforeach;?>
          </ul>

      <?php endif; ?>
    <form class="form-signin" action="" method="post">
      <!-- <img class="mb-4" src="img/logo-lg.png" alt="" width="100" height="100"> -->
      <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>


      <label for="inputUsername" class="sr-only">Email</label>
      <input type="username" id="inputUsername" class="" placeholder="Email"   name ="email" value="<?php echo $email;?>" ><br>

      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" class="" placeholder="Contraseña" name="password"value="">

      <!-- <div class="p-2">
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="" placeholder="Email" required="" autofocus=""><br>
      </div>

      <div class="">
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" class="" placeholder="Contraseña" required="">
      </div> -->


      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
      </div>
      <button class="btn btn-lg btn-primary" type="submit"name="ingresar">Ingresar</button><br><br>
      <a href="#">He olvidado mi contraseña</a><br>
      <p class="mt-5 mb-3 text-muted">© BuyTech - 2019</p>
    </form>
  </main>

  <?php require("est/footer.php") ?>
</body>
</html>
