<?php
function verificarUsuario ($usuario, $email){
  foreach ($usuarios as $usuario){
    if($usuario["email"] == $email){
      return true;
    }
  }
  return false;
}
if($_POST){
  $json = file_get_contents("data.json");
  $usuarios = json_decode($json, true);
  if(verificarUsuario($usuarios, $_POST["email"])){
    $error = "el usuario ya esta registrado";
  }
}
else{
  $nuevo[];
  $nuevo["email"] = $_POST["email"];
  $nuevo["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $usuarios[]= $nuevo;
  $json_actualizado = $json_encode($usuarios, JSON_PRETTY_PRINT);
  file_put_contents("data.json", $json_actualizado);
}
?>








//var_dump($_FILES);
//is_uploaded_file
function buscarPorEmail($email) {
$usuarios = file_get_contents("usuarios.json");

$usuariosArray = json_decode($usuarios, true);

  foreach($usuariosArray as $key=>$valor){

    if ($valor===$email){
      echo $key;
      return $usuariosArray;Exit;
    }
  }
  return null;
}

function upload($name,$dir){
  if($_FILES[$name]['error'] === UPLOAD_ERR_OK){
    $ext=pathinfo($_FILES[$name]['name'],PATHINFO_EXTENSION);
    $hash=crypt($_FILES[$name]['name'],random_bytes(10));
    move_uploaded_file($_FILES[$name]['tmp_name'],"$dir/$hash.$ext");
    echo 'dslfkjdfsd';
  }
}

if ($_FILES){

  upload('avatar', 'uploads');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form class="" action="index.php" enctype="multipart/form-data" method="post">

  <div class="">
    <input type="file" name="avatar">
  </div>
  <div class="">
    <button>Enviar</button>

  </div>
</form>

  </body>
</html>
