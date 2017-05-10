<?php /////////////////////////////////////////////////////
$titulo_pagina = "Editar Artículo";
$descripcion = "editar articulo";
$keywords = "editar, articulo, palabras clave, keywords";

include("funciones.php");
include("cabecera.php");

$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
$acentos = $con->query("SET NAMES 'utf8'");

$username = $_SESSION['login_user'];
if(!isset($_REQUEST['enviar'])){
	$id = $_GET['articulo'];
} else {
	$id = $_REQUEST["id"];
}
$sql = "SELECT * FROM articulos WHERE id = '$id'";

	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$nombre = $row["nombre"];
			$descripcion = $row["descripcion"];
			$precio = $row["precio"];
			$oferta = $row["oferta"];
			$stock = $row["stock"];
		}
		mysqli_free_result($result);
	}




if(isset($_REQUEST['enviar'])){
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	if (isset($_POST["oferta"])) {
		$oferta = $_POST["oferta"];
	} else {
		$oferta = 'no';
	}
	if (isset($_POST["stock"])) {
		$stock = $_POST["stock"];
	} else {
		$stock = 'no';
	}
	

	//validar campos
	$er_precio = "/^[0-9]+(\.[0-9]{2})?$/";

	if (!preg_match($er_precio, $precio)) {
		$precio = "";
	}
	
	if(empty($precio)) {
		echo "<h1>El formato del precio es incorrecto</h1>";

	} else { // si todo es correcto modificamos y le indicamos al usuario que todo ha ido correctamente
		$sql = "UPDATE articulos SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', oferta = '$oferta', stock = '$stock' WHERE id = '$id'";
		mysqli_query($con, $sql);
		echo "<h1><i>Cambios guardados</i></h1>";
	}
}

?>


<h1><?php echo parametro_plantilla("titulo_pagina") ?></h1>

<fieldset>
<legend>Modificar datos</legend>
<form name="formulario" id="formulario" action="editararticulo.php" method="post">
  <label for="nombre" id="correcto"><h1>Nombre del artículo:</label>
  <input type="text" name="nombre" id="nombre" maxlength="50" value="<?php echo $nombre ?>"/></h1>
  <label for="precio" id="correcto"><h1>Precio:</label>
  <input type="text" name="precio" id="precio" maxlength="50" value="<?php echo $precio ?>"/></h1>
	<input name="id" type=hidden id="id" value="<?php echo $id ?>"/>
  <label for="descripcion" id="correcto"><h1>Descripción:</h1></label>
  <textarea name="descripcion" form="formulario"><?php echo $descripcion ?></textarea><br/>

<?php
if ($oferta == 'si') {
	echo '<h1><input type="checkbox" name="oferta" value="si" checked>Oferta</h1>';
} else {
	echo '<h1><input type="checkbox" name="oferta" value="si">Oferta</h1>';
}
if ($stock == 'si') {
	echo '<h1><input type="checkbox" name="stock" value="si" checked>Stock</h1>';
} else {
	echo '<h1><input type="checkbox" name="stock" value="si">Stock</h1>';
}




?>
  <input type="submit" name="enviar" id="enviar" value="Guardar datos"/>
  <input type="reset" name="limpiar" id="button" value="Restablecer datos" ><br/>
</form> 
</fieldset>

<?php

echo "<br/><br/>";
include("pie.php");

?>



