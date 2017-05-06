<?php
require ("funciones/funciones.php");
conectar();

/* Filtrar los datos */
$id_post = $_GET['id_post'];

$stock = $_POST["stock"];

$restar = $stock-1;

 
/* Consulta a base de datos */
if ($restar!='') {
	
	mysql_query("UPDATE productos SET stock='$restar' WHERE id_post='$id_post'");
	
	
	printf("Has restado 1 unidad");
	print_r($_POST);
}
else {
	printf("Por favor rellena todos los campos", mysql_insert_id());
}

?>