<?php

include './clases/Coneccion.php';
require_once("dbController.php");
require_once("pagination.class.php");
$db_handle = new DBController();

$id = "";
$Nombre = "";
$Descripcion = "";
$IdPaquete = "";
$Precio = "";


$perPage = new PerPage();

$queryCondition = "";
if(!empty($_POST["Nombre"])) {
$queryCondition .= " WHERE Nombre LIKE '" . $_POST["Nombre"] . "%'";
}

if(!empty($_POST["id"])) {
if(!empty($queryCondition)) {
	$queryCondition .= " AND ";
} else {
	$queryCondition .= " WHERE ";
}
$queryCondition .= " id LIKE '" . $_POST["id"] . "%'";
}

$orderby = " ORDER BY id desc";
$sql = "SELECT P.id, P.Nombre, P.Descripcion, v.nombre, p.Precio FROM  producto P inner join foto_video v on P.IdPaquete=v.IdPaquete" . $queryCondition;
$paginationlink = "getresult.php?page=";					
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;

$query =  $sql . $orderby .  " limit " . $start . "," . $perPage->perpage; 
$result = $db_handle->runQuery($query);

if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}
$perpageresult = $perPage->perpage($_GET["rowcount"], $paginationlink);
?>
<form name="frmSearch" method="post" action="index.php">
			<div class="search-box">
	<p><input type="hidden" id="rowcount" name="rowcount" value="<?php echo $_GET["rowcount"]; ?>" /><input type="text" placeholder="Paquete"
 name="name" id="Nombre" class="demoInputBox" value="<?php echo $Nombre; ?>"
	/><input type="button" name="go" class="btnSearch" value="Buscar" onclick="getresult('<?php echo $paginationlink . $page; ?>')"><input type="reset" class="btnSearch" value="Regresar" onclick="window.location='index.php'"></p>
			</div>
			
			<div class='table-responsive'>
			<table    class="table table-striped table-condensed table-hover">
        <thead>
					<tr>
          <th><strong>CODIGO</strong></th>
          <th><strong>PAQUETE</strong></th> 
           <th><strong>DESCRIPCIÓN </strong></th> 
            <th><strong>CATEGORÍA </strong></th> 
             <th><strong>PRECIO</strong></th> 



          					
					<th><strong>ACCIONES</strong></th>
					

					
					</tr>
				</thead>
				<tbody>

<?php
if(!empty($result)) {
foreach($result as $k=>$v) {
?>
<tr id="toy-<?php echo $result[$k]["id"]; ?>">
<td class="id"><?php echo $result[$k]["id"]; ?></td>
<td class="Nombre"><?php echo $result[$k]["Nombre"]; ?></td>
<td class="Descripcion"><?php echo $result[$k]["Descripcion"]; ?></td>
<td class="nombre"><?php echo $result[$k]["nombre"]; ?></td>
<td class="Precio"><?php echo $result[$k]["Precio"]; ?></td>


<td class="action">
 <a href="Modificar.php?id=<?php echo $result[$k]["id"];?>"><i class="glyphicon glyphicon-edit"></i></a>

 
</td>
</tr>
<div>
<?php
}}
if(isset($perpageresult)) {
?>
<tr>
<td colspan="6" align=right> <?php echo $perpageresult; ?></td>
</tr>
<?php } ?>
<tbody>
</table>
</form>	