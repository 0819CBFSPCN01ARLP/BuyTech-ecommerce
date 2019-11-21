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

foreach ($productos as $producto) {
  
}

echo '<pre>';
var_dump($productos);
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <table>
      <tr>
        <th>Modelo</th>
        <th>Precio</th>
        <th>Descripcion</th>
        <th>Marca</th>
        <th>Procesador</th>
        <th>Pantalla</th>
        <th>Disco</th>
        <th>Memoria</th>
      </tr>
    </table>
  </body>
</html>
