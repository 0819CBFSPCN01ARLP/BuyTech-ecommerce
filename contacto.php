<!DOCTYPE html>
<?php
$rutaCss = "";
$titulo = "Contacto";

?>
<html lang="en" dir="ltr">
<?php require_once("est/head.php") ?>
<body>
  <?php require_once("est/header.php") ?>
  <main>
    <section class="container mt-5 mb-5">
      <div class="card">
        <h5 class="card-header">Contacto</h5>
        <form class="p-3">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nombre*</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Apellido*</label>
            <input type="lastname" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Email*</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Consulta*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" name="button">Enviar</button>
        </form>
      </div>
    </section>
  </main>
  <?php require_once("est/footer.php") ?>
</body>
</html>
