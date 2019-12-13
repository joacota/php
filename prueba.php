<?php

include("Usuario.php");
$usuario = new Usuario("joaquin","joaco@hotmail.com","hola");
var_dump($usuario);
echo "<hr>";
$usuario2 = new Usuario("jorge","jorge@hotmail.com","chau");
var_dump($usuario2);
echo "<hr>";
$celular1 = new Celular("apple", "ocho","movistar", "1122");

echo $usuario->getMail();
echo "<hr>";
echo $usuario2->getMail();
echo "<hr>";
echo $usuario->setMail("lol0@hotmail.com");
echo "<hr>";
echo $usuario2->setMail("jojo@hotmail.com");
echo "<hr>";
echo $usuario->saludar();
echo "<hr>";
 $usuario->setCelular($celular1);
 $usuario2->setCelular($celular1);
var_dump($usuario);
var_dump($usuario2);
echo "<hr>";
echo $usuario->mostrarTelefono();
