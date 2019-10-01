<?php
  $rutaCss = "";
  $titulo = "Crea tu cuenta";
<<<<<<< HEAD

  //validaciones formulario - archivo con funcion validadora
  require_once "validacionRegistro.php";
  require_once "usuarioExistente.php";

//declaramos las variables vacias para la primera vez que se ingresa
 $name = null;
 $lastname = null;
 $email= null;
 $password= null;
//validacion cuando el usuario ingresa los datos y existe $_POST
if(count($_POST)){

  $name = trim($_POST ["name"]);
  $lastname = trim($_POST ["lastname"]);
  $email = trim($_POST ["email"]);
  $password  =trim($_POST ["password"]);

//guardar los errores que retorne la funcion validadadora;

$erroresRegistro = validarRegistro();
// $erroresUsuarioExistente = validarUsuario();


//Luego si no hay errores en el $errorRegistro, redireccion:
 if( !count($erroresRegistro)&& !count($validarUsuario)){
  header("location:registroExitoso.php");
  exit;
}
}

=======
  require("funciones.php");
  nuevoUsuario();
  mailExiste();
>>>>>>> 855b491ff94f384ac5bf8c9e34d1f980db2fc1cf
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once("est/head.php") ?>
<body class="">
  <?php require_once("est/header.php") ?>

  <main class="text-center pt-5">
<<<<<<< HEAD
    <?php
    //Si existen errores en el formulario, redireccion
     if(isset($erroresRegistro) && count($erroresRegistro)>0):  ?>
          <ul>
              <?php foreach($erroresRegistro as $unError): ?>
                <li><?= $unError;?></li>
              <?php endforeach;?>
          </ul>

      <?php endif; ?>

      <form class="form-signin" action="" method="post" enctype="multipart/form-data">
=======
    <div class="">
      <form class="form-signin" action="" method="POST" enctype="multipart/form-data">
>>>>>>> 855b491ff94f384ac5bf8c9e34d1f980db2fc1cf
        <!-- <img class="mb-4" src="img/logo-lg.png" alt="" width="100" height="100"> -->
            <h1 class="h3 mb-3 font-weight-normal">Creá tu cuenta</h1>

            <div class="p-1">
              <label for="" class="sr-only">Nombre</label>
              <input type="text" id="" class="" name="name" placeholder="Nombre" value="<?php echo $name;?>"><br>

            </div>

            <div class="p-1">
              <label for="" class="sr-only">Apellido</label>
              <input type="text" id="" class="" name="lastname" placeholder="Apellido" value="<?php echo $lastname;?>"><br>

            </div>

            <div class="p-1">
              <label for="inputUsername" class="sr-only">Email</label>
              <input type="username" id="inputUsername" name="email" class="" placeholder="Email"value="<?php echo $email;?>"><br>

            </div>

            <div class="p-1">
              <label for="inputPassword" class="sr-only">Contraseña</label>
              <input type="password" id="inputPassword" class="" name="password" placeholder="Contraseña"value="" ><br>

            </div>

            <div class="p-1">
              <label for="inputImg" class="sr-only">Subi tu foto</label>
              <input type="file" name="profile" value="Subi tu Foto"><br>
            </div>

            <div class="checkbox p-1">
              <label>
                <input type="checkbox" value="remember-me"> Recordarme
              </label>
            </div>
            <input class="btn btn-lg btn-primary" type='submit' name='Submit' value='Crear Cuenta' />

            <p class="mt-5 mb-3 text-muted">© BuyTech - 2019</p>
      </form>
      </div>

      </script>
  </main>

<?php require("est/footer.php") ?>
</body>
</html>
