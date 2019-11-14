<?php
require_once("pdo_admin/pdo.php");

//validacion errores en el registro
function validarRegistro ($db){
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
            }  else if ( mailExiste($db)){
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

              if (!empty(($_POST ["imagen"]))){

              $name = $_FILES ["imagen"]["name"];
              $tmp_name = $_FILES ["imagen"]["tmp_name"];
              $error = $_FILES ["imagen"]["error"];
              $size = $_FILES ["imagen"]["size"];
              $max_size = 1024 * 1024 * 1;
              $type = $_FILES ["imagen"]["type"];
              if( $size > $max_size){
                $errores ["errorTamaño"] = "El tamaño de la imagen supera el maximo permitido. 1 MB";
                }else if($type != "image/jpg" &&  $type !="image/png" &&  $type !="image/jpeg"){
                $errores ["errorTipo"]   = "Archivos permitidos JPG, PNG y JPEG";
                  }
              }
          return $errores;
  }

     //Si el archivo esta ok, se sube archivo
function validarImagen(){
  $resultado = false;
  if (isset($_POST ["imagen"])){
  // if ($_FILES){
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
  function mailExiste($db){
              // $emailExistente= true;
              // $emailNoExistente = false;
              $query = $db->prepare("SELECT * FROM usuarios");
              $query->execute();
              $arrayDeUsuarios = $query->fetchAll(PDO::FETCH_ASSOC);
              $respuesta = false;
                foreach ($arrayDeUsuarios as $usuario) {
                  if($_POST["email"] == $usuario["mail"]){
                    $respuesta = true;
                    break;
                      }else{
                    $respuesta = false;
                      }

                  }
                return $respuesta;
              }
//si no hay errores en registro y no existe el usuario, se crea nuevo usuarios
function nuevoUsuario($db){

              // Paso los datos del formulario a variables

              $nombre = $_POST["name"];
              $apellido = $_POST["lastname"];
              $mail = $_POST["email"];
              $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
              $avatar = validarImagen();

              //De forma barata seteo que sea admin cambiando el apellido y nombre a admin y luego ejecuto un IF que
              // chequee y lo suba a la base de datos como admin.
              if ($nombre == "admin" && $apellido == "admin") {
                $admin = 1;
                try {
                  // Preparo y ejecuto las consultas

                  $query = $db->prepare("INSERT INTO usuarios (tipo_de_usuario, nombre, apellido, mail, password, ruta_imagen) VALUES (:tipo_de_usuario, :nombre, :apellido, :email, :password, :ruta_imagen)" );
                  $query->bindValue(':tipo_de_usuario', $admin);
                  $query->bindValue(':nombre',  $nombre);
                  $query->bindValue(':apellido',  $apellido);
                  $query->bindValue(':email',  $mail);
                  $query->bindValue(':password',  $password);
                  $query->bindValue(':ruta_imagen', $avatar);


                  $query->execute();


                } catch (\Exception $e) {
                  echo "Hubo un error en la carga de usuario";
                }

              }else {
                // Preparo y ejecuto las consultas
                try {
                  $query = $db->prepare("INSERT INTO usuarios (nombre, apellido, mail, password, ruta_imagen) VALUES (:nombre, :apellido, :email, :password, :ruta_imagen)" );
                  $query->bindValue(':nombre',  $nombre);
                  $query->bindValue(':apellido',  $apellido);
                  $query->bindValue(':email',  $mail);
                  $query->bindValue(':password',  $password);
                  $query->bindValue(':ruta_imagen', $avatar);

                  $query->execute();

                } catch (\Exception $e) {
                  echo "Hubo un error en la carga de usuario.";
                }


                }



              }

//Validaciones en login

function passwordExiste($db){
//Traer datos de usuarios y verificar sus passwords frente a lo enviado por POST

            $query = $db->prepare("SELECT * FROM usuarios");
            $query->execute();
            $arrayDeUsuarios = $query->fetchAll(PDO::FETCH_ASSOC);
            $respuesta = false;
            foreach ($arrayDeUsuarios as $usuario) {
              if(password_verify($_POST["password"], $usuario["password"])){
                $respuesta = true;
                break;
              }else{
                $respuesta = false;
              }

            }

              return $respuesta;
}
function validarLogin($db){

              $errores = [];

              $email = trim($_POST ["email"]);
              $password = trim($_POST ["password"]);

              //Validaciones del Email
              if(empty($email)){
                $errores ["errorEmail"] = "El Email es Obligatorio";
              } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores ["errorEmail"] = "Ingrese una direccion de correo valida";
              } else if (mailExiste($db) != true){
                $errores ["mailNoExiste"]= "Usuario No Valido";
              }

              //Validaciones de la contraseña
                if(empty($password)){
                  $errores ["errorPassword"] = "Ingrese una Contraseña Valida";
                }

                else if (!passwordExiste($db)){
                  $errores ["passwordNoExiste"]= "Contraseña No Valida";
                }


              return $errores;

}



 ?>
