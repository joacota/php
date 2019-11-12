<?php
include("celular.php");
class Usuario{
private $nombre;
private $mail;
private $contraseña;
private $celular;

public function __construct($nombre,$mail,$contraseña){
  $this->nombre = $nombre;
  $this->mail = $mail;
  $this->contraseña = $this->setPass($contraseña);
}
public function getMail(){
  return $this->mail;
}
public function setMail($mail){
  return $this->mail = $mail;
}
public function saludar(){
return "hola" ." ".  $this->nombre;
}
public function getNombre(){
  return $this->nombre;
}
public function getPass(){
  return $this->contraseña;
}
public function setNombre($nombre){
  return $this->nombre = $nombre;
}
public function setPass($contraseña){
  return $this->contraseña = $this->encriparPass($contraseña);
}
private function encriparPass($contraseña){
  return password_hash($contraseña, PASSWORD_DEFAULT);
}
public function setCelular( Celular $celular){
  return $this->celular = $celular;
}
public function mostrarTelefono(){
  return $this->celular->getMarca();
}
}
