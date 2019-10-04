<?php
$persona = [
  "nombre" => "jon",
  "apellido" => "snow",
  "edad" => 27,
  "hobbies" => ["programar", "futbol", "netflix"]
];
$persona["edad"] = 25;
$persona["Direccion"] = "Winterfall";
$persona["hobbies"] [] = "dormir";
var_dump($persona);
$numero1 = 4;
$numero2 = 3;
if ($numero1 > $numero2) {
  echo "el numero mayor es $numero1";

} else {
echo "el numero mayor es $numero2";
}
echo '<br>';
$numeroaleatorio = rand(1,5);
if($numeroaleatorio == 5 || $numeroaleatorio == 3){
  echo $numeroaleatorio;
}
if($numeroaleatorio != 3){
  echo "no es 3";
} else {
  echo $numeroaleatorio;
}
echo '<br>';
$elnumero = rand (1,100);
if ($elnumero > 50){
  echo "el numero es mayor a 50";
}else{
  echo "el numero es menor a 50";
}
echo '<br>';
$nombreDeUsuario = "joacota";
$ContraseniaDeUsuario = "hola";
if($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == 1234){
  echo "bienvenido";
}else{
  echo "hay un errror de login";
}
?>
