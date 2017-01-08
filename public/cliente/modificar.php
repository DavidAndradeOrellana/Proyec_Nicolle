<?php
session_start();
if(isset($_SESSION['nombre'])){

include './clases/coneccion.php'; 
?>
<?php  
$sql ="SELECT * FROM cliente WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
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
                <li><a href="index.php">Cliente</a></li>
                <li><a href="../paquetes/index.php">Paquetes de foto y video</a></li>
                <li><a href="../usuario/index.php">Usuario</a></li>
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
     <div class="container">
  <section class="class color1">
    <br>
    <div class="container">

                             <form class="form-horizontal" action="modificado.php" method="post" id="ClaseCategoria">
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
                                   <h2>MODIFICAR CLIENTE</h2>
                                   <div class="form-group">
                                   
                                    <input type="text" name="Idcliente"   style="visibility:hidden" class="required form-control"    value='<?php print $datos[0][0]?>'>
                                </div>
                                <div class="form-group has-warning">
                                   <label for="nombre" class="control-label col-xs-3">Nombre:</label>
                                    <div class="col-xs-5">
              <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese  un nombre " 
              onkeyup="validacion('nombre'); " onkeypress="return sololetras(event)" value='<?php print $datos[0][1]?>' required>
              <span class="help-block"></span>
                  </div>
                                </div>
                          
                          <div class="form-group has-warning">
                                   <label for="apellido" class="control-label col-xs-3">Apellido:</label>
                                    <div class="col-xs-5">
              <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Ingrese un apellido "
               onkeyup="validacion('apellido'); "onkeypress="return sololetras(event)"value='<?php print $datos[0][2]?>'  required>
              <span class="help-block"></span>
                  </div>
                                </div>

                   <div class="form-group has-warning">
                                   <label for="direccion" class="control-label col-xs-3">Direccion:</label>
                                    <div class="col-xs-5">
              <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Ingrese una dirección " onkeyup="validacion('direccion'); " value='<?php print $datos[0][3]?>' required>
              <span class="help-block"></span>
                  </div>
                                </div>
             <div class="form-group has-warning">
                                   <label for="telefono" class="control-label col-xs-3">Telefono:</label>
                                    <div class="col-xs-5">
              <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Ingrese un número de teléfono " 
              onkeyup="validacion('telefono');" onkeypress="return aceptNum(event)" value='<?php print $datos[0][4]?>' required>
              <span class="help-block"></span>
                  </div>
                                </div>

                                
            

                      <div class="form-group has-warning">
    <div class="col-lg-offset-4 col-lg-12">
        <button type="submit" class="btn btn-primary" name='bot' onclick='verificarCliente();'>
        <span class="glyphicon glyphicon-edit"></span> Modificar
      </button>  
       <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Cancelar</a>
    </div>
  </div>
                        
                        </div>

                    </div>
                </div>
            </div>


 
</div>
<br>

         
                             
   </div> 
<br>
      </section>


         <script>window.jQuery || document.write('<script src="../../libreria/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
     <script src="../../libreria/js/vendor/bootstrap.min.js"></script>
     <script src="../../libreria/js/main.js"></script> 
<script src="../../libreria/js/validacionCliente.js"></script>
 <script src="consulta.js">  </script>
    </body>
</html>
<?php
}else{
  header("location: /nicolle/index.php");
}
?>