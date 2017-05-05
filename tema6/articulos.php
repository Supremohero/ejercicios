<?php
$titulo_pagina = "Artículos";
$descripcion = "articulos";
$keywords = "articulos, palabras clave, keywords";
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
include("funciones.php");
include("cabecera.php");
//Se incluye la cabecera y comienza el cuerpo de la página a continuación
	if (isset($_GET['enviar'])) {
		$orden = $_GET['orden'];
	}
?>


	<h1><?php echo parametro_plantilla("titulo_pagina"); echo " - Página $currpag"?></h1>
<table>
<tr id='titulo'>
<td><b>Nombre de Artículo</b></td>
<td><b>Descripción</b></td>
<td><b>Precio</b></td>
<td><b>Oferta</b></td>
<form name="ordenar" id="ordenar" action="articulos.php" method="get">
<h1><label for="orden">Ordenar por:</label>
<select name="orden" id="orden">
 <option value="precio" selected="selected">Precio</option>
 <option value="nombre">Nombre</option>
 <option value="oferta">Oferta</option>
</select>
 <input type="submit" name="enviar" id="enviar" value="enviar" /></h1>
</form>
<?php
mostrarArticulos();
echo "<br/>";
echo $orden;

echo "<br/><br/>";
include("pie.php");

?>
