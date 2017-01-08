<?php
session_start();
if(isset($_SESSION['nombre'])){

 include './clases/coneccion.php'; 
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
          <a href="../index.php" class="navbar-brand">NICOLLE</a>
        </div>
        <div class="collapse navbar-collapse" id="ejemplo-5">
          <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Registros<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                <li><a href="#">Registros <span class="glyphicon glyphicon-book ico-color2"></span></a></li>
                                                                   <li class="divider"></li>
                <li><a href="../cliente/index.php">Cliente</a></li>
                <li><a href="../paquetes/index.php">Paquetes de foto y video</a></li>
                <li><a href="index.php">Usuario</a></li>
              </ul>
            </li>
                                               
              <li><a href="../facturador/index.php" target="_blank">Venta</a></li>                        
          
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
       
                                                </li>
                                                <li><a href="../logout.php">Salir</a></li>
          </ul>
        </div>
      </div>
</nav><br><br><br>
  <br><br>


  <section class="class color1">
    <br>
    <div class="container">

            <button class="btn  btn-info btn-lg" data-toggle="modal" data-target="#miModal"><i class="glyphicon glyphicon-plus"></i> &nbsp;Nuevo</button>
 <div class="modal fade" id="miModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">REGISTRO DE USUARIO </h4>
                        </div>

                        <div class="modal-body">
                             <form class="form-horizontal" action="guardar.php?accion=save" method="post" id="ClaseCategoria">
                                   <div class="container">
       <div class="col-xs-5">
<div class="form-group">
                        <div class="alert alert-danger text-center" style="display:none;" id="error">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Advertencia: </strong>  Debe de rellenar todos los campos por favor. 
                        </div>

                         </div>

                            </div>
                                  </div>
                              
                                <div class="form-group">
                                   <label for="Usuario" class="control-label col-xs-3">Usuario:</label>
                                    <div class="col-xs-5">
              <input id="Usuario" name="Us" type="text" class="form-control" placeholder="Escriba nombre de usuario" onkeyup="validacion('Usuario');" required>
              <span class="help-block"></span>
                  </div>
                                </div>

                                   <div class="form-group">
                                    <label for="contraseña" class="control-label col-xs-3">Contraseña:</label>
                <div class="col-xs-5">
              <input id="contraseña" name="con" type="password" class="form-control" placeholder="Ingrese su contraseña" onkeyup="validacion('contraseña');" required>
              <span class="help-block"></span>
                  </div>
                                </div>
 
                                
    
                              <center> <button  type="submit" name='bot' onclick='verificar();' class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp;Registrar</button></center>
                            </form>
                        </div>

                        <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Cancelar</button>                           
                        </div>

                    </div>
                </div>
            </div>


 

<br><br>  

               
 
    <div id="toys-grid">
      <input type="hidden" name="rowcount" id="rowcount" />         
    </div>
    <div id="add-form">
   </div>
   


   </div>  

      </section>
    <script>window.jQuery || document.write('<script src="../../libreria/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
     <script src="../../libreria/js/vendor/bootstrap.min.js"></script>
     <script src="../../libreria/js/main.js"></script> 
 <script src="../../libreria/js/validacionUsuario.js"></script>
 <script src="consulta.js">  </script>
  
    </body>
</html>
<?php
}else{
  header("location: /nicolle/index.php");
}
?>