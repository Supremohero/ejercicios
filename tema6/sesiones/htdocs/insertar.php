<?php
require ("funciones/funciones.php");
conectar();

/* Filtrar los datos */
$titulo = addslashes(htmlspecialchars($_POST["titulo"]));
$estanteria = addslashes(htmlspecialchars($_POST["estanteria"]));
$modulo = addslashes(htmlspecialchars($_POST["modulo"]));
$cajon = addslashes(htmlspecialchars($_POST["cajon"]));
$pvp = addslashes(htmlspecialchars($_POST["pvp"]));
$pvd = addslashes(htmlspecialchars($_POST["pvd"]));
$stock = addslashes(htmlspecialchars($_POST["stock"]));

$timestamp = date('Y-m-d H:i:s');  
 
/* Consulta a base de datos */
if ($titulo!='') {
	mysql_query("insert into productos (id_post, estanteria, modulo, cajon, titulo, pvp, pvd, tiempo, stock) 
	values ('','$estanteria','$modulo','$cajon','$titulo','$pvp','$pvd','$timestamp','$stock')");
	
	printf("¡Felicidades! Has publicado un nuevo  #%d\n", mysql_insert_id());
	echo $timestamp;
}
else {
	printf("Por favor rellena todos los campos", mysql_insert_id());
}

?>