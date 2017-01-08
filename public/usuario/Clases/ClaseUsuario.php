<?php

class ClaseUsuario {
private $IdUsuario;
private $Nombre;
private $Administrador;

public function getIdUsuario() {
return $this->IdUsuario;
}

public function getNombre() {
return $this->Nombre;
}

public function getAdministrador() {
return $this->Administrador;
}

public function setIdUsuario($IdUsuario) {
   $this->IdUsuario = $IdUsuario;
}

public function setNombre($Nombre) {
      $this->Nombre = $Nombre;
}

public function setAdministrador($Administrador) {
         $this->Administrador = $Administrador;	
}


}