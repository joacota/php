<?php
/*primer*/

for ($i=0; $i <10 ; $i++){
echo $i * 2 .  "<br>";
};

/*segundo*/
$contador= 100;
while($contador > 85){
echo $contador;
$contador--;
}
"<br>";

/*tercero*/
echo "<br>";
$contador=1;
while ($contador <= 5) {
echo $contador * 2;
$contador++;
}
/*cuarto*/
echo"<br>";
$caras=0;
$tiros=0;
while ($caras <5) {
  $resultado= rand(0,1);
  if($resultado ==1){
    $caras++;
  }
  $tiros++;
}
echo $tiros;

/**quinto**/

echo "<br>";

$nombres = ["nombre1", "nombre2", "nombre3", "nombre4", "nombre5"];

for ($i=0; $i <count($nombres); $i++) {
echo  $nombres[$i];
}
echo "<br>";

$i=0;
while ($i < count($nombres)) {
echo $nombres[$i];
$i++;

}
echo "<br>";

foreach($nombres as $nombre){
  echo $nombre;
}
echo"<br>";

$i=0;
do {
echo $nombres[$i];
$i++;
} while ($i < count($nombres));

/*sexto*/
echo"<br>";
$dieznumeros = [];
for ($i=0; $i < 10; $i++) {
$dieznumeros[] = rand(0,10);
}
foreach ($dieznumeros as $numero) {

if($numero == 5 ){
echo "este numero 5";
break;
}
}

/*septipo*/
echo"<br>";
$numero100 = [];
$resultado1= 0;
for ($i=0; $i < 10; $i++) {
$numero100 [] = rand(0,100);
}
foreach ($numero100 as $n100) {
if($n100 % 2){
  $resultado1= $resultado1 + 1;
}

}
echo $resultado1;

/*octavo*/

echo"<br>";
$mascotas = [
"animal" => "perro",
"edad" => 5,
"altura" => 0,60,
"nombre" => "sonic"
];
foreach ($mascotas as $key => $value) {
  echo "$key : $value";
}
?>
