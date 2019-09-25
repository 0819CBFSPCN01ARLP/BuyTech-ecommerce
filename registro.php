<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/registrocss.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
  <title>BuyTech! Registro</title>
  <meta charset="utf-8">
  <title></title>
</head>
<body class="container-fluid">
  <header class="rounded-bottom container-fluid p-3  ">
    <h1 class="p-1 mx-3  float-left"> <a href="home.html">BuyTech</a></h1>
    <nav id="navbar" class="d-none d-lg-flex justify-content-end pb-2 float-right">
      <ul class=" nav d-xs-none d-sm-none d-md-none d-lg-flex justify-content-end p-2">
        <li class="nav-item">
          <a class="nav-link " href="LOGIN.html">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="REGISTRATE.html">REGISTRATE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="carrito.html">CARRITO DE COMPRAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="PERFIL.html">PERFIL DE USUARIO</a>
        </li>
      </ul>
    </nav>
    <a class="mt-2 d-block d-md-none float-right" href="#navbarMobile"> <button type="button" class="btn btn-primary mt-2 d-block d-md-none float-right" name="button"> <i class="icon ion-md-menu"></i></button></a>

    <a class="mt-2 d-none d-md-block d-lg-none float-right" href="#navbarMobile"> <button type="button" class="btn btn-primary  mt-2 d-none d-md-block d-lg-none float-right" name="button"><i class="icon ion-md-menu"></i></button></a>
  </header>
  <div class="container">
    <section class="">
      <div class="col-12 mx-auto">
        <h2 class="text-center">Registrate | ¿Ya tenés una cuenta?  </h3>
        </div>
        <form>
          <div class="form-group">
            <label for="nombre">Nombre*</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="apellido">Apellido*</label>
            <input type="text" class="form-control" id="apellido" placeholder="Apellido" required>
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" placeholder="Direccion">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="Numero">Numero</label>
            <input type="number" class="form-control" id="Numero" placeholder="Numero">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="piso/departamento">Piso/Departamento</label>
            <input type="text" class="form-control" id="piso/departamento" placeholder="Piso/Departamento">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="provincia">Provincia</label>
            <input type="text" class="form-control" id="provincia" placeholder="Provincia">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="codigopostal">Codigo Postal</label>
            <input type="codigopostal" class="form-control" id="codigopostal" placeholder="Codigo Postal">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">

          </div>
          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Telefono">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="email">E-email*</label>
            <input type="email" class="form-control" id="email" placeholder="E-mail"required>
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="email">Contraseña*</label>
            <input type="password" class="form-control" id="password" placeholder="Contraseña"required>
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="Pais">Pais*</label>
            <select class="pais" required>
              <option value>Por favor, seleccione una opción</option>
              <option value="ar">Argentina</option>
              <option value="br">Brasil</option>
              <option value="Pr">Paraguay</option>
              <option value="Bo">Bolivia</option>
              <option value="Pe">Perú</option>
              <option value="ur">Uruguay</option>
            </select>

          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Declaro conocer y aceptar los Terminos y Condiciones y la Politica de Privacidad y Seguridad
              </label>
            </div>
          </div>
          <button type="Guardar" id="save" class="btn btn-primary" >Guardar</button>
        </form>

        <div class="">

        </div>
        <div class="container">

          <div class="numeros_contacto row">
            <div class="col-lg-3 col-md-3" >
              <ion-icon name="call"></ion-icon>
              <b class ="text-sm-right">Call Center</b><br/><a href="#">+54 11 8888-4444</a>
            </div>
            <div class="col-lg-3 col-md-3">
              <ion-icon name="call"></ion-icon>
              <b>Ventas</b><br/><a href="#">+54 11 8888-5555</a>
            </div>
            <div class="col-lg-3 col-md-3">
              <ion-icon name="call"></ion-icon>
              <b>Post-Venta</b><br/><a href="#">+54 11 8888-6666</a>
            </div>
            <div class="col-lg-3 col-md-3">
              <ion-icon name="call"></ion-icon>
              <b>Soporte Tecnico</b><br/><a href="#">+54 11 8888-7777</a>
            </div>
          </div>
        </section>
      </div>
      <?php require("est/footer.php") ?>
    </body>
    </html>
