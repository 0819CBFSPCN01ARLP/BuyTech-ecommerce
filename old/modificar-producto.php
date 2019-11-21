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


$query = $db -> prepare("UPDATE productos SET modelo = :modelo , precio = :precio ,
  descripcion = :descripcion , id_marca = :id_marca , id_procesador = :id_procesador ,
  id_pantalla = :id_pantalla , id_disco = :id_disco
WHERE id_memoria = :id_memoria");

$query -> bindvalue(':modelo', $modelo);
$query -> bindvalue(':precio', $precio);
$query -> bindvalue(':descripcion', $descripcion);
$query -> bindvalue(':id_marca', $id_marca);
$query -> bindvalue(':id_procesador', $id_procesador);
$query -> bindvalue(':id_pantalla', $id_pantalla);
$query -> bindvalue(':id_disco', $id_disco);
$query -> bindvalue(':id_memoria', $id_memoria);


if ($query -> execute() ) {
  echo "Producto actualizado correctamente";
}
 else {
  echo "Ups, hubo un error actualizando el producto :( ";
}



// // ------------------
// $titulo = "Mi perfil";
// $nombre;
// $apellido;
// $celular;
// $direccion;
// $ciudad;
// $pais;
// $codigoPostal;
// $email = $_SESSION["usuario"];
// if ($_POST) {
//   $nombre = $_POST["nombre"];
//   $apellido = $_POST["apellido"];
//   $celular = $_POST["celular"];
//   $direccion = $_POST["direccion"];
//   $ciudad = $_POST["ciudad"];
//   $pais = $_POST["pais"];
//   $codigoPostal = $_POST["codigoPostal"];
//
//   $query = $db->prepare("UPDATE usuarios SET nombre = :nombre, apellido = :apellido, celular = :celular, direccion_envio = :direccion, ciudad = :ciudad, pais = :pais, codigo_postal = :codigoPostal WHERE mail = :email");
//   $query->bindValue(':nombre', $nombre);
//   $query->bindValue(':apellido', $apellido);
//   $query->bindValue(':celular', $celular);
//   $query->bindValue(':direccion', $direccion);
//   $query->bindValue(':ciudad', $ciudad);
//   $query->bindValue(':pais', $pais);
//   $query->bindValue(':codigoPostal', $codigoPostal);
//   $query->bindValue(':email', $email);
//   $query->execute();
//
//
//
// }
