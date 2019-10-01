<?php

function validarLogin(){

$errores = [];

$email = trim($_POST ["email"]);
$password = trim($_POST ["password"]);

//Validaciones del Email
if(empty($email)){
  $errores ["errorEmail"] = "El Email es Obligatorio";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
$errores ["errorEmail"] = "Ingrese una direccion de correo valida";
}

//Validaciones de la contrasenia
  if(empty($password)){
    $errores ["errorPassword"] = "Ingrese una Contraseña Valida";
  }

return $errores;

}


 ?>
