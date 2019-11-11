<?php
require("pdo_admin/pdo.php");

// $marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$marca = $_POST["marca"];
$procesador = $_POST["procesador"];
$pantalla = $_POST["pantalla"];
$disco = $_POST["disco"];
$memoria = $_POST["memoria"];


$insertar = $db -> prepare("INSERT INTO productos(modelo,precio,descripcion,marca,procesador,pantalla,disco,memoria)
VALUES ('$modelo','$precio','$descripcion','$marca','$procesador','$pantalla','$disco','$memoria')");
$insertar -> execute();
