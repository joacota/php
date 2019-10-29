<?php

if($_POST){

//InvalidArgumentException

  if($_POST['password']!=$_POST['password_confirmation']){

    $errors['password_confirmation']='el password no coincide';
  }

if(empty($errors)){

$json=file_get_contents('usuarios.json');
$users=json_decode($json,true);
$users[]=[
  'email'=>$_POST['email'],
  'password'=> password_hash($_POST['password'],PASSWORD_DEFAULT),
];
$json=json_encode($users,JSON_PRETTY_PRINT);
$json=file_put_contents('usuarios.json',$json);
var_dump($_POST);

}
}

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form  action="registro.php" method="post">
<div class="">
  <input type="text" name="email" >
</div>

<div class="">
  <input type="password" name="password">
</div>

<div class="">
  <input type="password" name="password_confirmation">
  <p><?= $errors['password_confirmation'] ?? '' ?> </p>
</div>
<div class="">
  <button>enviar</button>
</div>
</form>


  </body>
</html>
