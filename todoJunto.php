<?php
$funcionesEjecutadas = 0;

require("clase3.php");
require("clase3superficie.php");

function radios($circulo1, $circulo2, $circulo3){
 $c1 = circulo ($circulo1);
 $c2 = circulo( $circulo2);
 $c3 = circulo($circulo3);
 return mayor($c1,$c2,$c3);
}
echo radios(2, 4, 6);

/* function radios ($circulo1, $circulo2; $circulo3)
return mayor (circulo ($circulo1), circulo($circulo2), circulo($circulo3));


/*por cada function circulo, se debe crear una variable nueva,luego con mayor, me devuelve el circulo mas grande*/
echo $funcionesEjecutadas;

$posicion = strpos("Me encanta php, a mi también me encanta php!" , "php");
echo "posicion" . "$posicion";
