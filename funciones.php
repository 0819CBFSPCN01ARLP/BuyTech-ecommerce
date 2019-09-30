<?php

function nuevoUsuario(){
$usuarioNuevo = [
  "name" => $_POST["name"],
  "lastname" => $_POST["lastname"],
  "email" => $_POST["email"],
  "password" => password_hash($_POST["password"],PASSWORD_DEFAULT)
  ];

$usuarios=file_get_contents("usuarios.json");

$usuariosArray=json_decode($usuarios,true);

$usuariosArray[]=$usuarioNuevo;

$usuariosFinal=json_encode($usuariosArray,JSON_PRETTY_PRINT);

file_put_contents("usuarios.json",$usuariosFinal);
}

function mailExiste(){
  $emailExistente= "Ya existe una cuenta asociada a este email";
  $usuariosExistentes=file_get_contents("usuarios.json");
  $arrayDeUsuarios=json_decode($usuariosExistentes,true);
  foreach ($arrayDeUsuarios as $usuario) {
    if($_POST["email"] == $usuario["email"]){
      return $emailExistente;
    }
  }
}

function validarNombre() {
  if($_POST){
    if(strlen($_POST["name"] ==0 && strlen($_POST["lastname"])== 0)){
      return false;
    }
    return true;
  }
}
