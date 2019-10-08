<?php
function mayor($numero1, $numero2, $numero3){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
if ($numero1 > $numero2 && $numero1 > $numero3) {

  return $numero1;

}elseif($numero2 > $numero1 && $numero2 > $numero3){
return $numero2;
}else {
  return $numero3;
}
}
echo mayor (1, 2, 4);

/*punto 2*/
function tabla ($base, $limite){
  $array = [];
  for ($i=$base; $i <= $limite ; $i++) {
  $array[] = $i;
  }
return $array;
}
$numeros = tabla(13, 18);
var_dump($numeros);
echo "<br>";

/*tercero*/
function mayor1($numero1, $numero2, $numero3 = 100){
if ($numero1 > $numero2 && $numero1 > $numero3) {

  return $numero1;

}elseif($numero2 > $numero1 && $numero2 > $numero3){
return $numero2;
}else {
  return $numero3;
}
}
echo mayor1 (1, 2);
echo "<br>";

/*cuarto*/
function tablas ($base, $limite =100){
  $array = [];
  for ($i=$base; $i <= $limite ; $i++) {
  $array[] = $i;
  }
return $array;
}
$numeros = tablas(80);
var_dump($numeros);
echo "<br>";
