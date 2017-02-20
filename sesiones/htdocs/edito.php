<?php
require ("funciones/funciones.php");
conectar();

/* Filtrar los datos */
$id_post = $_POST['id_post'];
$titulo = addslashes(htmlspecialchars($_POST["titulo"]));
$cajon = addslashes(htmlspecialchars($_POST["cajon"]));
$modulo = addslashes(htmlspecialchars($_POST["modulo"]));
$estanteria = addslashes(htmlspecialchars($_POST["estanteria"]));
$timestamp = date('Y-m-d H:i:s');  
$pvp = addslashes(htmlspecialchars($_POST["pvp"]));
$pvd = addslashes(htmlspecialchars($_POST["pvd"]));
$stock = $_POST["stock"];

 
/* Consulta a base de datos */
if ($titulo!='') {
	
	mysql_query("UPDATE productos SET estanteria='$estanteria',modulo='$modulo', cajon='$cajon', titulo='$titulo', pvp='$pvp',pvd='$pvd', stock='$stock' WHERE id_post='$id_post'");
	
	
	printf("Has actualizado el producto");
	print_r($_POST);
}
else {
	printf("Por favor rellena todos los campos", mysql_insert_id());
}

?>