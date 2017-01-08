<?php
include './clases/Coneccion.php';

require_once("dbController.php");
require_once("pagination.class.php");
$db_handle = new DBController();

$IdUsuario = "";
$Nombre = "";
$Administrador = "";

$perPage = new PerPage();

$queryCondition = "";
if(!empty($_POST["Nombre"])) {
$queryCondition .= " WHERE Nombre LIKE '" . $_POST["Nombre"] . "%'";
}

if(!empty($_POST["IdUsuario"])) {
if(!empty($queryCondition)) {
	$queryCondition .= " AND ";
} else {
	$queryCondition .= " WHERE ";
}
$queryCondition .= " IdUsuario LIKE '" . $_POST["IdUsuario"] . "%'";
}

$orderby = " ORDER BY IdUsuario desc";
$sql = "SELECT * FROM usuario " . $queryCondition;
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
			<p><input type="hidden" id="rowcount" name="rowcount" value="<?php echo $_GET["rowcount"]; ?>" /><input type="text" placeholder="Usuario" name="name" id="Nombre" class="demoInputBox" value="<?php echo $Nombre; ?>"	/><input type="button" name="go" class="btnSearch" value="Buscar" onclick="getresult('<?php echo $paginationlink . $page; ?>')"><input type="reset" class="btnSearch" value="Regresar" onclick="window.location='index.php'"></p>
			</div>
			<div class='table-responsive'>
			<table    class="table table-striped table-condensed table-hover">
        <thead>
					<tr>
          <th><strong>CODIGO</strong></th>
          <th><strong>NOMBRE</strong></th> 

          					
					<th><strong>ACCIONES</strong></th>
					

					
					</tr>
				</thead>
				<tbody>
<?php
if(!empty($result)) {
foreach($result as $k=>$v) {
?>
<tr id="toy-<?php echo $result[$k]["IdUsuario"]; ?>">
<td class="IdUsuario"><?php echo $result[$k]["IdUsuario"]; ?></td>
<td class="Nombre"><?php echo $result[$k]["Nombre"]; ?></td>


<td class="action">
 <a href="Modificar.php?IdUsuario=<?php echo $result[$k]["IdUsuario"];?>"><i class="glyphicon glyphicon-edit"></i></a>

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