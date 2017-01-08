<?php
session_start();
if(isset($_SESSION['nombre'])){


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>NICOLLE DIGITAL</title>
        <link rel="shortcut icon" href="../../img/favicon.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../../libreria/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="../../libreria/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../../libreria/css/main.css">

        <script src="../../libreria/js/vendor/modernizr-2.8.3.min.js"></script>

          <script src="../../libreria/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="../../libreria/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    
    <script src="../../libreria/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target="#ejemplo-5">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand">NICOLLE</a>
        </div>
        <div class="collapse navbar-collapse" id="ejemplo-5">
          <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Registros<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                <li><a href="#">Registros <span class="glyphicon glyphicon-book ico-color2"></span></a></li>
                                                                   <li class="divider"></li>
                <li><a href="../cliente/index.php">Cliente</a></li>
                <li><a href="index.php">Paquetes de foto y video</a></li>
                <li><a href="../usuario/index.php">Usuario</a></li>
              </ul>
            </li>
                                               
              <li><a href="../facturador/index.php">Venta</a></li>                        
          
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
       
                                                </li>
                                                <li><a href="../logout.php">Salir</a></li>
          </ul>
        </div>
      </div>
</nav><br><br><br>
  <br><br>
 
          <?php

include './Clases/coneccion.php';
include './Clases/Paquete.php';
include './Clases/PaqueteControlador.php';

$PaqueteA = new PaqueteControlador();


        if(isset($_REQUEST['bot'])){
             $PaqueteA->setIdPromocion(($_REQUEST['Id']));
           $PaqueteA->setNomPaquete($_REQUEST['paquete']);
            $PaqueteA->setDescripcion($_REQUEST['descricion']);
            $PaqueteA->setIdPaquete($_REQUEST['categoria']);
            $PaqueteA->setPrecio($_REQUEST['precio']);
           $datosObj=array($PaqueteA->getIdPromocion(),
                           $PaqueteA->getNomPaquete(),
                           $PaqueteA->getDescripcion(),
                           $PaqueteA->getIdPaquete(),
                           $PaqueteA->getPrecio());

                    
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $PaqueteA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'index.php?accion=con\'>Ver datos</a>';
            print "</div>";
            
            
       }
      

 ?>  

<script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
     
    <script>window.jQuery || document.write('<script src="../../libreria/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
     <script src="../../libreria/js/vendor/bootstrap.min.js"></script>
     <script src="../../libreria/js/main.js"></script> 
      <script src="../../libreria/js/validacionPaquete.js"></script> 
    </body>
<paquete
<?php
}else{
  header("location: /nicolle/index.php");
}
?>