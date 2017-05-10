<?php
$titulo_pagina = "Mi carrito de la compra";
$descripcion = "carrito";
$keywords = "carrito, palabras clave, keywords";
//include("seguridad.php");
require("funciones.php");
require ("compra.php");



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


	<h1><?php echo parametro_plantilla("titulo_pagina") ?></h1>
<?php
mostrarCarrito();
echo "<br/>";

echo "<br/><br/>";
include("pie.php");

?>
