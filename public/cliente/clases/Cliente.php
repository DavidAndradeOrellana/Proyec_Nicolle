<?php
class cliente {
private $idcliente;
private $nombre;
private $apellido;
private $direccion;
private $telefono;

public function getIdcliente(){
	return $this->idcliente;
}
public function getNombre(){
	return $this->nombre;
}
public function getApellido(){
	return $this->apellido;
}
public function getDireccion(){
	return $this->direccion;
}
public function getTelefono(){
	return $this->telefono;
}

public function setIdcliente($idcliente){
	$this->idcliente   = $idcliente;
}
public function setNombre($nombre){
	$this->nombre   = $nombre;
}
public function setApellido($apellido){
	$this->apellido   = $apellido;
}
public function setDireccion($direccion){
	$this->direccion   = $direccion;
}
public function setTelefono($telefono){
	$this->telefono   = $telefono;
}


}