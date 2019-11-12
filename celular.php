<?php
class Celular{
private $marca;
private $modelo;
private $provedor;
private $numero;

public function __construct($marca, $modelo, $provedor, $numero){
  $this->marca = $marca;
  $this->modelo = $modelo;
  $this->provedor = $provedor;
  $this->numero = $numero;
}

public function getMarca(){
   return $this->marca;
}
public function getModelo(){
return   $this->modelo;
}
public function getProvedor(){
  $this->proverdor;
}
public function getNumero(){
  $this->numero;
}
public function setMarca($marca){
  $this->marca = $marca;
}
public function setModelo($modelo){
  $this->modelo = $modelo;
}
public function setNumero($numero){
  $this->numero =$numero;
}
public function setProvedor($provedor){
  $this->provedor = $provedor;
}
}
