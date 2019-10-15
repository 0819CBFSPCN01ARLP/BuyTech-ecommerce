<?php
//validacion errores en el registro
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
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) ){
              $errores ["errorEmail"] = "Ingrese una direccion de correo valida";
            }  else if ( mailExiste()){
              $errores ["mailExistente"]= "Usuario Ya Registrado";
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
             //validacion de subida de archivo

                    if (isset($_POST ["profile"])){

                    $name = $_FILES ["imagen"]["name"];
                    $tmp_name = $_FILES ["imagen"]["tmp_name"];
                    $error = $_FILES ["imagen"]["error"];
                    $size = $_FILES ["imagen"]["size"];
                    $max_size = 1024 * 1024 * 1;
                    $type = $_FILES ["imagen"]["type"];


                          if( $size > $max_size){
                            $errores ["errorTamaño"] = "El tamaño de la imagen supera el maximo permitido. 1 MB";
                          }
                          else if($type != "image/jpg" &&  $type !="image/png" &&  $type !="image/jpeg"){
                             $errores ["errorTipo"]   = "Archivos permitidos JPG, PNG y JPEG";
                        }
                    }
          return $errores;
  }

     //Si el archivo esta ok, se sube archivo
           function validarImagen(){
             $resultado = false;
             if (isset($_POST ["profile"])){
                   $name = $_FILES ["imagen"]["name"];
                   $tmp_name = $_FILES ["imagen"]["tmp_name"];
                   $errores = $_FILES ["imagen"]["error"];
                   $size = $_FILES ["imagen"]["size"];
                   $max_size = 1024 * 1024 * 1;
                   $type = $_FILES ["imagen"]["type"];
             $imagenGuardada = true;
             $imagenNoGuardada =false;
             $resultado = false;
              $ruta = "files/". $name;
             if(move_uploaded_file($tmp_name, $ruta)){

               $resultado=  $imagenGuardada;
             }else{
               $resultado = $imagenNoGuardada;
             }
            }
            if ($resultado){
              return $ruta;
            }; //cambio return $resultado por un if, que si da true devuelve la ruta.
          }
//validar que el mail no exista para crear usuario
  function mailExiste(){
              $emailExistente= true;
              $emailNoExistente = false;
              $usuariosExistentes=file_get_contents("usuarios.json");
              $arrayDeUsuarios=json_decode($usuariosExistentes,true);
              $respuesta = false;
                foreach ($arrayDeUsuarios as $usuario) {
                if($_POST["email"] == $usuario["email"]){
              $respuesta = $emailExistente;
              break;
                }else{
              $respuesta = $emailNoExistente;
                }

              }
                return $respuesta;
  }
//si no hay errores en registro y no existe el usuario, se crea nuevo usuarios
function nuevoUsuario(){
              $usuariosArray = [];
              //guardo en variable lo que obtengo del json
              $usuarios=file_get_contents("usuarios.json");
              //decodifico el array de usuarios guardados
              $usuariosArray=json_decode($usuarios,true);
              //agrego al array de usuarios, el array del usuario nuevo
              $usuarioNuevo = [
                "id" => count($usuariosArray),
                "name" => $_POST["name"],
                "lastname" => $_POST["lastname"],
                "email" => $_POST["email"],
                "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
                "avatar" => validarImagen()
              ];

              $usuariosArray[] = $usuarioNuevo;
              //agrego al array de usuarios el nuevo y lo codifico en json
              $usuariosFinal=json_encode($usuariosArray,JSON_PRETTY_PRINT);
              //envio el string a guardar
              file_put_contents("usuarios.json",$usuariosFinal);
                // $resultadoImagen = validarImagen();
                // echo $resultadoImagen;
              }

//Validaciones en login

function passwordExiste(){
//desencriptar contraseña

            $passwordExistente= true;
            $passwordNoExistente = false;
            $passwordExistentes=file_get_contents("usuarios.json");
            $arrayDeUsuarios=json_decode($passwordExistentes,true);
            $respuesta = false;

              foreach ($arrayDeUsuarios as $usuario) {
              if(password_verify($_POST["password"], $usuario["password"])){
                        // var_dump($_POST["password"], $usuario["password"]);
                $respuesta = $passwordExistente;
                break;
              }else{
                $respuesta = $passwordNoExistente;
              }

            }

              return $respuesta;
}
function validarLogin(){

              $errores = [];

              $email = trim($_POST ["email"]);
              $password = trim($_POST ["password"]);

              //Validaciones del Email
              if(empty($email)){
                $errores ["errorEmail"] = "El Email es Obligatorio";
              } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores ["errorEmail"] = "Ingrese una direccion de correo valida";
              } else if (!mailExiste()){
                $errores ["mailNoExiste"]= "Usuario No Valido";
              }

              //Validaciones de la contrasenia
                if(empty($password)){
                  $errores ["errorPassword"] = "Ingrese una Contraseña Valida";
                }

                else if (!passwordExiste()){
                  $errores ["passwordNoExiste"]= "Contraseña No Valida";
                }

                else if (!passwordExiste()){
                  $errores ["passwordNoExiste"]= "Contraseña No Valida";
                }
              return $errores;

}
// Validar inicio de Session


 ?>
