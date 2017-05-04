<?php
$titulo_pagina = "Artículos";
$descripcion = "articulos";
$keywords = "articulos, palabras clave, keywords";
$total_articulos = 13;
$num_filas = 5;
$orden ='precio';
if (isset($_GET["desplazamiento"]))
	$desplazamiento = $_GET["desplazamiento"];
else $desplazamiento = 0;
$prevpag = $desplazamiento / 5;
$currpag = $desplazamiento / 5 + 1;
$nextpag = $desplazamiento / 5 + 2;
include("funciones.php");
include("cabecera.php");
?>





	<h1><?php echo parametro_plantilla("titulo_pagina"); echo " - Página $currpag"?></h1>
<table>
<tr id='titulo'>
<td><b>Nombre de Artículo</b></td>
<td><b>Descripción</b></td>
<td><b>Precio</b></td>
<td><b>Oferta</b></td>

<?php mostrarArticulos() ?>
</td></tr></table><br>






<?php
if ($desplazamiento > 0) {
	$prev = $desplazamiento - $num_filas;
	$url = $_SERVER["PHP_SELF"] . "?orden=$orden&desplazamiento=$prev";
	echo "<a href='$url'>Página $prevpag</a>&nbsp;&nbsp;&nbsp;";
} else {
	echo "Página 1&nbsp;&nbsp;&nbsp;";
}

if ($total_articulos > ($desplazamiento + $num_filas)) {
	$prox = $desplazamiento + $num_filas;
	$url = $_SERVER["PHP_SELF"] . "?$orden&desplazamiento=$prox";
	echo "<a href='$url'>Página $nextpag</a>";
} else {
	echo "Página $currpag";
}

echo "<br/><br/>";
include("pie.php");

?>
