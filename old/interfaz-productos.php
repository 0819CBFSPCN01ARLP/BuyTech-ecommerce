<?php
$titulo='Productos';
require_once('pdo_admin/pdo.php');

$consultasql="SELECT * FROM productos INNER JOIN marcas ON productos.id_marca=marcas.id_marca
LEFT JOIN procesadores ON productos.id_procesador=procesadores.id_procesador
LEFT JOIN pantallas ON productos.id_pantalla=pantallas.id_pantalla
LEFT JOIN discos ON productos.id_disco=discos.id_disco
LEFT JOIN memorias ON productos.id_memoria=memorias.id_memoria";

$query= $db -> prepare($consultasql);
$query -> execute();

$productos = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($productos);
echo '</pre>';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?= include_once('est/head.php'); ?>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> id_marca y modelo </h5>
      <h6 class="card-title">precio</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Editar</a>
    </div>
  </div>

</body>
</html>
