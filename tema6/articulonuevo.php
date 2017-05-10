<?php
$titulo_pagina = "Añadir nuevo artículo";
$descripcion = "añadir nuevo articulo";
$keywords = "nuevo, articulo, palabras clave, keywords";
include("funciones.php");
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	if (mysqli_connect_errno()) {
   		printf("Conexión fallida: %s\n", mysqli_connect_error());
    		exit();
	}

if(isset($_REQUEST['enviar'])){
	$articulo = $_POST["nombre"];
	$precio = $_POST["precio"];
	$descripcion = $_POST["descripcion"];
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

	} else {
		$codigo = "SELECT * FROM articulos WHERE nombre = '$articulo'";
		$result = mysqli_query($con, $codigo);
		$rows = mysqli_num_rows($result);
		if($rows == 1) {
			echo "<h1>El articulo $articulo ya existe.</h1>";
			$articulo = "";
		} else {
			// si todo es correcto se crea el articulo y se redirige a articulos.php
			$sql = "INSERT INTO articulos (nombre, descripcion, precio, oferta, stock) VALUES" .
			"('$articulo', '$descripcion', '$precio', '$oferta', '$stock')";	
			mysqli_query($con, $sql);
			header("Location: articulos.php");
		}
	}
}
include("cabecera.php");
?>
<fieldset>
<legend>Artículo nuevo</legend>
<form name="formulario" id="formulario" action="articulonuevo.php" method="post">
<?php
if(!isset($_REQUEST['enviar'])){
?>
  <label for="nombre" id="correcto"><h1>Nombre del artículo:</label>
  <input type="text" name="nombre" id="nombre" maxlength="50"/></h1>
  <label for="precio" id="correcto"><h1>Precio:</label>
  <input type="text" name="precio" id="precio" maxlength="50"/></h1>
  <label for="descripcion" id="correcto"><h1>Descripción:</h1></label>
  <textarea name="descripcion" form="formulario"></textarea><br/>

<h1><input type="checkbox" name="oferta" value="si">Oferta</h1>
<h1><input type="checkbox" name="stock" value="si" checked>Stock</h1>

<?php
} else {
?>
  <label for="nombre" id="correcto"><h1>Nombre del artículo:</label>
  <input type="text" name="nombre" id="nombre" maxlength="50" value="<?php echo $articulo ?>"/></h1>
  <label for="precio" id="correcto"><h1>Precio:</label>
  <input type="text" name="precio" id="precio" maxlength="50" value="<?php echo $precio ?>"/></h1>
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
}
?>
  <input type="submit" name="enviar" id="enviar" value="Enviar"/>
  <input type="reset" name="limpiar" id="button" value="Restablecer datos" /><br/>
</form> 
</fieldset>
<?php
include("pie.php");
?>
