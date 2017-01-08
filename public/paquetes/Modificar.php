<?php
session_start();
if(isset($_SESSION['nombre'])){

include './clases/coneccion.php'; 
?>
<?php  
$sql ="SELECT * FROM producto WHERE id ='".$_REQUEST['id']."';";
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
                                  <h2>MODIFICAR PAQUETE</h2>
                                  <input type="text" name="Id"   style="visibility:hidden" class="required form-control"    value='<?php print $datos[0][0]?>'>
                                <div class="form-group has-warning">
                                   <label for="paquete" class="control-label col-xs-3">Paquete:</label>
                                    <div class="col-xs-5">
              <input id="paquete" name="paquete" type="text" class="form-control" placeholder="Ingrese  un paquete " 
              onkeyup="validacion('paquete'); " onkeypress="return sololetras(event)" value='<?php print $datos[0][1]?>'required>
              <span class="help-block"></span>
                  </div>
                                </div>
                          
                          <div class="form-group has-warning">
                                   <label for="descripcion" class="control-label col-xs-3">Descripcion:</label>
                                    <div class="col-xs-5">
              <input id="descripcion" name="descricion" type="text"  size="15"class="form-control" placeholder="Descripcion del paquete "
               onkeyup="validacion('descripcion'); "onkeypress="return sololetras(event)"value='<?php print $datos[0][2]?>' required>
              <span class="help-block"></span>
                  </div>
                                </div>
<div class="form-group has-warning">
                                   <label for="precio" class="control-label col-xs-3">Precio:</label>
                                    <div class="col-xs-5">
              <input id="precio" name="precio" type="text" class="form-control" placeholder="Precio " onkeyup="validacion('precio');" 
            value='<?php print $datos[0][4]?>'required>
              <span class="help-block"></span>
                  </div>
                                </div>

<div class="form-group has-warning">
                        <label for"categoria" class="control-label col-xs-3">Categoría :</label>
                        <div class="col-xs-5">
                            <select id="categoria" name="categoria" class="form-control" onchange="validacion('categoria');">
          
                      
                        <option value='<?php print $datos[0][3]?>'>

                        <?php 
                        $sql2="select nombre from foto_video where IdPaquete='".$datos[0][3]."'";
                        $da = consultaD($con,$sql2,3);                       
                        print $da[0][0];
                        ?>
                        </option>
                        <?php                
                            $sql = "SELECT IdPaquete,nombre FROM foto_video WHERE IdPaquete != '".$datos[0][3]."'";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['IdPaquete'];
                                print "'>";
                                print $value['nombre'];
                                print "</option>";
                            }                
                        ?>
                    </select>
                                
                            
                        </div>
                    </div>
                   
            

                                
    
                              <div class="form-group">
    <div class="col-lg-offset-4 col-lg-12">
        <button type="submit" class="btn btn-primary" name='bot' >
        <span class="glyphicon glyphicon-edit"></span> Modificar
      </button>  
       <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Cancelar</a>
    </div>
  </div>
                            </form>
                       
                    

 
</div>
<br>
      </section>

    <script>window.jQuery || document.write('<script src="../../libreria/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
     <script src="../../libreria/js/vendor/bootstrap.min.js"></script>
     <script src="../../libreria/js/main.js"></script> 
      <script src="../../libreria/js/validacionPaquete.js"></script> 
      <script src="consulta.js"></script> 
    </body>
<paquete
<?php
}else{
  header("location: /nicolle/index.php");
}
?>