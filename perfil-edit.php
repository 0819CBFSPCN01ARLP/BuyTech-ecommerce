<?php
session_start();
require_once("pdo_admin/pdo.php");
$titulo = "Mi perfil";
$nombre;
$apellido;
$celular;
$direccion;
$ciudad;
$pais;
$codigoPostal;
$email = $_SESSION["usuario"];
if ($_POST) {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $celular = $_POST["celular"];
  $direccion = $_POST["direccion"];
  $ciudad = $_POST["ciudad"];
  $pais = $_POST["pais"];
  $codigoPostal = $_POST["codigoPostal"];

  $query = $db->prepare("UPDATE 'usuarios' SET 'nombre' = :nombre, 'apellido' = :apellido, 'celular' = :celular, 'direccion_envio' = :direccion, 'ciudad' = :ciudad, 'pais' = :pais, 'codigo_postal' = :codigoPostal WHERE 'mail' = :email");
  $query->bindValue(':nombre', $nombre);
  $query->bindValue(':apellido', $apellido);
  $query->bindValue(':celular', $celular);
  $query->bindValue(':direccion', $direccion);
  $query->bindValue(':ciudad', $ciudad);
  $query->bindValue(':pais', $pais);
  $query->bindValue(':codigoPostal', $codigoPostal);
  $query->bindValue(':email', $email);


  $query->execute();

}




if (isset($_SESSION["usuario"])) {
  $query = $db->prepare("SELECT * FROM usuarios");
  $query->execute();
  $arrayDeUsuarios = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($arrayDeUsuarios as $usuario) {
    if ($_SESSION["usuario"] == $usuario["mail"]) {
      $_SESSION["name"] = $usuario["nombre"];
      $_SESSION["lastname"] = $usuario["apellido"];
      $_SESSION["avatar"] = $usuario["ruta_imagen"];
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
          <img src="<?=$_SESSION["avatar"]?>" class="rounded-circle card-img " alt="...">
          <!-- <div class="p-2 text-center">
            Cambiá tu avatar<input class="btn btn-dark" type="file" name="avatar">
          </div> -->
        </div>

        <div class="col-md-10">
          <div class="card-body row">

            <div class="col-md-6 mt-2">
              <form action="perfil-edit.php" method="post">
                <h6 class="card-title dropdown-divider"></h5>
                <h5 class="card-title">Tus datos</h5>
                <p class="card-text">Nombre: <input type="text" name="nombre" value="" ></p>
                <p class="card-text">Apellido: <input type="text" name="apellido" value="" ></p>
                <p class="card-text">Celular: <input type="tel" name="celular" value="" ></p>
                <p class="card-text">Dirección de envío: <input type="text" name="direccion" value="" ></p>
                <p class="card-text">Ciudad: <input type="text" name="ciudad" value="" ></p>
                <p class="card-text">País: <input type="text" name="pais" value="" ></p>
                <p class="card-text">Código Postal: <input type="text" name="codigoPostal" value="" ></p>
                <input class="btn btn-dark" type="submit" name="" value="Guardar cambios">
                <!-- <hr>
                <h5 class="card-title py-4">¿Querés cambiar tu imagen de usuario?</h5>
                <p class="card-text">Nueva imagen de Usuario: <input type="file" name="avatar" value="" ></p>
              </form> -->
            </div>

            <!-- <div class="col-md-6 mt-2">
              <form class="" action="index.html" method="post">
                <h6 class="card-title dropdown-divider"></h5>
                <h5 class="card-title">Datos de facturación y envío</h5>
                <p><input type="text" name="name" value="" placeholder="Nombre"></p>
                <p><input type="text" name="lastname" value="" placeholder="Apellido"></p>
                <input class="btn btn-light"type="submit" name="" value="Guardar cambios">
              </form>
            </div> -->

            <!-- <div class="col-md-6 mt-2">
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
            </div> -->
          </div>
        </div>

      </div>
    </div>
  </main>
</body>
<?php require("est/footer.php") ?>
</html>
