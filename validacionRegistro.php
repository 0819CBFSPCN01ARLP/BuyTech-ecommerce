<?php
function validarRegistro (){

$errores = [];

$name = trim($_POST ["name"]);
$lastname = trim($_POST ["lastname"]);
$email = trim($_POST ["email"]);
$password  =trim($_POST ["password"]);


//Validaciones del Nombre

if(empty($name)){
  $errores ["errorName"] = "El nombre es Obligatorio";
}
//Validaciones del Apellido
if(empty($lastname)){
  $errores ["errorLastname"] = "El Apellido es Obligatorio";
}
//Validaciones del Email
if(empty($email)){
  $errores ["errorEmail"] = "El Email es Obligatorio";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) ){
$errores ["errorEmail"] = "Ingrese una direccion de correo valida";
}


//Validaciones de la contrasenia

  if(empty($password)){
    $errores ["errorPassword"] = "Ingrese una Contraseña";
  }
   else if(strlen($password) > 8){
      $errores ["errorPassword"] = "La clave no puede tener más de 8 caracteres";

   }
   else if (!preg_match('`[a-z]`',$password)){
      $errores ["errorPassword"] = "La clave debe tener al menos una letra minúscula";

   }
   else if (!preg_match('`[A-Z]`',$password)){
      $errores ["errorPassword"]  = "La clave debe tener al menos una letra mayúscula";

   }
   else if (!preg_match('`[0-9]`',$password)){
      $errores ["errorPassword"]  = "La clave debe tener al menos un caracter numérico";

   }

return $errores;

}






 ?>
