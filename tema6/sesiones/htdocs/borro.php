<?php
require ("funciones/funciones.php");
conectar();

/* Filtrar los datos */
$id_post = $_POST['id_post'];

 
/* Consulta a base de datos */
if ($id_post!='') {
	
	mysql_query("DELETE FROM productos WHERE id_post='$id_post'");
	
	
	printf("El producto ha sido borrado");
	print_r($_POST);
}
else {
	printf("Por favor rellena todos los campos", mysql_insert_id());
}

?>