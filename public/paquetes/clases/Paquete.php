<?php

class Paquete {
private $IdPromocion;
private $NomPaquete;
private $Descripcion;
private $IdPaquete;
private $Precio;

public function getIdPromocion(){
	return $this->IdPromocion;
}
public function getNomPaquete(){
	return $this->NomPaquete;
}
public function getDescripcion(){
	return $this->Descripcion;
}
public function getIdPaquete(){
	return $this->IdPaquete;
}
public function getPrecio(){
	return $this->Precio;
}

public function setIdPromocion($IdPromocion){
	$this->IdPromocion  = $IdPromocion;
}
public function setNomPaquete($NomPaquete){
	$this->NomPaquete = $NomPaquete;
}
public function setDescripcion($Descripcion){
	$this->Descripcion  = $Descripcion;
}
public function setIdPaquete($IdPaquete){
	$this->IdPaquete  = $IdPaquete;
}
public function setPrecio($Precio){
	$this->Precio  = $Precio;
}





}