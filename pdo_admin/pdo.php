<?php

$dsn="mysql:host=localhost;dbname=buytech_db;port=3306";
$user="root";
$pass="";

try {
  $db= new PDO($dsn,$user,$pass);
} catch (\Exception $e) {
  echo 'Hubo un error en la conexión :(';
}
