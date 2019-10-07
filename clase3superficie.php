<?php
function triangulo($base, $altura){
  return ($base * $altura) / 2;
}
echo triangulo (2, 4);
echo "<br>";

/*segundo*/
function rectangulo($base, $altura){
  return ($base * $altura);
}
echo rectangulo(5, 10);
echo "<br>";

/*tercero*/
function cuadrado ($base, $altura){
  return ($base * $altura);
}
echo cuadrado(10, 10);
echo"<br>";

/*cuarto*/
function circulo($radio){
 return pi() * ($radio * $radio);
}
echo circulo (2);
