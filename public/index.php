
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
        <link rel="shortcut icon" href="../img/favicon.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../libreria/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="../libreria/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../libreria/css/main.css">

        <script src="../libreria/js/vendor/modernizr-2.8.3.min.js"></script>
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
                <li><a href="cliente/index.php">Cliente</a></li>
                <li><a href="paquetes/index.php">Paquetes de foto y video</a></li>
                <li><a href="usuario/index.php">Usuario</a></li>
              </ul>
            </li>
                                               
              <li><a href="facturador/index.php"  target="_blank">Venta</a></li>                        
          
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
       
                                                </li>
                                                <li><a href="logout.php">Salir</a></li>
          </ul>
        </div>
      </div>
</nav><br><br><br>
  <br><br>
     <header class="app-header">

  <div class="container">
    <div class="jumbotron">
      <div class="container">

<div class="row">
        <div class="col-md-2">
   <img  class="venta1" src="../img/captura_de_pantalla_2014-04-04_a_la_s_10.20.28_1.png">
   </div>

   <div class="col-md-8">
       <h2>FOTOS Y VIDEOS PROFESIONALES</h2>
       <h1>STUDIO NICOLLE DIGITAL</h1>
          <p  class="centro"> Contactos: Tels: 7245-1307 ó al 6166-5599  </p>
       </div>
           <div class="col-md-2">
           <img class="venta1" src="../img/CAMARAS (21).png">
  </div>
        </div>
</div>
  </div>
</div> 
         </header >

      </section>
    <script>window.jQuery || document.write('<script src="../libreria/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
     <script src="../libreria/js/vendor/bootstrap.min.js"></script>
     <script src="../libreria/js/main.js"></script> 
    </body>
</html>
<?php
}else{
  header("location: /nicolle/index.php");
}
?>