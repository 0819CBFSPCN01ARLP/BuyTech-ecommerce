<?php
function validarUsuarioExistente(){
  //si existe el archivo con los usuarios
if (file_exists($pathUusarios)){

    $arrayUusarios = [ ];

$usuarios=file_get_contents("/json/usuarios.json");

$usuariosArray=json_decode($usuarios,true);

  foreach ($arrayUsuarios as  $usuario) {
    //si el usuario tiene email == $email entonces, es mi usuario
  if($usuario ["email" ] == $email){

      echo "el usuario existe";

  } else {
    echo "el usuario No existe";
  }
    }

  return validarUsuario();


}

}


 ?>
