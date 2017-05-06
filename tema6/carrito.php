<?php
$titulo_pagina = "Mi carrito de la compra";
$descripcion = "carrito";
$keywords = "carrito, palabras clave, keywords";

require("funciones.php");
require ("compra.php");
//include("seguridad.php"); // al tener el carrito en las cookies no es necesario que este autenticado


$num_filas = 5;
if(!isset($orden)){
	$orden ='precio';
}

if (isset($_GET["desplazamiento"]))
	$desplazamiento = $_GET["desplazamiento"];
else $desplazamiento = 0;
$prevpag = $desplazamiento / 5;
$currpag = $desplazamiento / 5 + 1;
$nextpag = $desplazamiento / 5 + 2;
	if (isset($_GET['orden'])) {
		$orden = $_GET['orden'];
	}

include("cabecera.php");
//Se incluye la cabecera y comienza el cuerpo de la página a continuación
?>


	<h1><?php echo parametro_plantilla("titulo_pagina"); echo " - Página $currpag"?></h1>
<!--
<table>
<tr id='titulo'>
<td><b>Nombre de Artículo</b></td>
<td><b>Descripción</b></td>
<td><b>Precio</b></td>
<td><b>Categoría</b></td>
<td><b>Oferta</b></td>
<form name="ordenar" id="ordenar" action="articulos.php" method="get">
<h1><label for="orden">Ordenar por:</label>
<select name="orden" id="orden">
 <option value="precio">Precio</option>
 <option value="categoria">Categoría</option>
 <option value="nombre">Nombre</option>
</select>
<label for="enviar">enviar</label>
 <input type="submit" name="desplazamiento" id="enviar" value="<?php echo $desplazamiento?>" /></h1>
</form>
-->
<?php
mostrar_carrito();
echo "<br/>";

echo "<br/><br/>";
include("pie.php");

?>