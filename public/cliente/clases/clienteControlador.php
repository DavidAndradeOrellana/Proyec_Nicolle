<?php
class clienteControlador extends cliente{
   
    public function guardarDatos($con,$objCliente) {
        $variableSql = "INSERT INTO cliente ";
        $variableSql .= "(id,nombre,RUC,direccion,";
        $variableSql .= "telefono) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objCliente[0]."',";
        $variableSql.="'".$objCliente[1]."',";
        $variableSql.="'".$objCliente[2]."',";
        $variableSql.="'".$objCliente[3]."',";
        $variableSql.="'".$objCliente[4]."');";        
        return consultaA($con, $variableSql);
    
        }

        public function modificarDatos($con,$objCliente) {
        $variableSql = "UPDATE cliente SET  ";
        $variableSql .= "nombre = '".$objCliente[1]."'";
        $variableSql .= "  ,RUC = '".$objCliente[2]."'";
        $variableSql .= " ,direccion = '".$objCliente[3]."'";
        $variableSql .= " ,telefono = '".$objCliente[4]."'";
        $variableSql .= " WHERE id = ".$objCliente[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
