<?php
require("pdo_admin/pdo.php");

// $marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$id_marca = $_POST["id_marca"];
$id_procesador = $_POST["id_procesador"];
$id_pantalla = $_POST["id_pantalla"];
$id_disco = $_POST["id_disco"];
$id_memoria = $_POST["id_memoria"];


$query = $db -> prepare("INSERT INTO productos(modelo,precio,descripcion,id_marca,id_procesador,id_pantalla,id_disco,id_memoria)
VALUES(:modelo , :precio , :descripcion , :id_marca , :id_procesador , :id_pantalla , :id_disco , :id_memoria)");

$query -> bindvalue(':modelo', $modelo);
$query -> bindvalue(':precio', $precio);
$query -> bindvalue(':descripcion', $descripcion);
$query -> bindvalue(':id_marca', $id_marca);
$query -> bindvalue(':id_procesador', $id_procesador);
$query -> bindvalue(':id_pantalla', $id_pantalla);
$query -> bindvalue(':id_disco', $id_disco);
$query -> bindvalue(':id_memoria', $id_memoria);


if ($query -> execute() ) {
  echo "Nuevo producto almacenado correctamente";
}
 else {
  echo "Ups, hubo un error almacenando el producto :( ";
}
