<?php

class UsuarioControlador extends ClaseUsuario{
     public function guardarDatos($con,$objUsuario){
     $variableSql = "INSERT INTO Usuario ";
        $variableSql .= "(IdUsuario,Nombre,Administrador) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objUsuario[0]."',";
        $variableSql.="'".$objUsuario[1]."',";
        $variableSql.="'".$objUsuario[2]."');";
       
        return consultaA($con, $variableSql);

	}
   
        public function modificarDatos($con,$objUsuario) {
        $variableSql = "UPDATE Usuario SET  ";
        $variableSql .= "Nombre = '".$objUsuario[1]."'";
        $variableSql .= "  ,Administrador = '".$objUsuario[2]."'";
        $variableSql .= " WHERE IdUsuario = ".$objUsuario[0].";";                
        return consultaA($con, $variableSql);
        
        }
}