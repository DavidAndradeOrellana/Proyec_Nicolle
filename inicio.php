
<script language= "javascript">
function msg(){
	alert ("Erro nombre y contraseña incorrecta")
}
</script>
<?php
error_reporting(0);
session_start();
 $nombre = $_REQUEST['Usuario'];
 $pass =  $_REQUEST['contraseña'];

 $conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("db_factura", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM Usuario where nombre= '".$nombre."' and  administrador = '".$pass. "'" ,$conexion);

 $admin = mysql_query( "SELECT * FROM Usuario where nombre = '".$nombre."' and  normal = '".$pass. "'" ,$conexion);


 
 if($row = mysql_fetch_array($estandar)){
$_SESSION['nombre'] = $row;
 	header("location: /nicolle/public/index.php");
 }else if ( $row = mysql_fetch_array($admin)){
 	$_SESSION['nombre'] = $row;
	header("location:/nicolle/public/index.php");
} else {
	
		header("location: index.php");
}
