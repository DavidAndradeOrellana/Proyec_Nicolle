<?php
class PaqueteControlador extends Paquete{
   
    public function guardarDatos($con,$objPaquete) {
        $variableSql = "INSERT INTO producto ";
        $variableSql .= "(id,Nombre,Descripcion,IdPaquete,";
        $variableSql .= "Precio) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objPaquete[0]."',";
        $variableSql.="'".$objPaquete[1]."',";
        $variableSql.="'".$objPaquete[2]."',";
        $variableSql.="'".$objPaquete[3]."',";
        $variableSql.="'".$objPaquete[4]."');";        
        return consultaA($con, $variableSql);
    
        }

        public function modificarDatos($con,$objPaquete) {
        $variableSql = "UPDATE producto SET  ";
        $variableSql .= "Nombre = '".$objPaquete[1]."'";
        $variableSql .= "  ,Descripcion = '".$objPaquete[2]."'";
        $variableSql .= " ,IdPaquete = '".$objPaquete[3]."'";
        $variableSql .= " ,Precio = '".$objPaquete[4]."'";
        $variableSql .= " WHERE id = ".$objPaquete[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
