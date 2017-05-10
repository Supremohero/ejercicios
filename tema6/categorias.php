<?php
$titulo_pagina = "Buscar artículos";
$descripcion = "categorias";
$keywords = "categorias, buscar, articulos, palabras clave, keywords";
$num_filas = 5;
if(!isset($orden)){
	$orden ='precio';
}

if (isset($_GET["categoria"]))
	$categoria = $_GET["categoria"];
else $categoria = 'videojuegos';

if (isset($_GET["desplazamiento"]))
	$desplazamiento = $_GET["desplazamiento"];
else $desplazamiento = 0;
$prevpag = $desplazamiento / 5;
$currpag = $desplazamiento / 5 + 1;
$nextpag = $desplazamiento / 5 + 2;
if (isset($_GET['orden'])) {
	$orden = $_GET['orden'];
}



include("funciones.php");
include("cabecera.php");
//Se incluye la cabecera y comienza el cuerpo de la página a continuación
?>
	<h1><?php echo parametro_plantilla("titulo_pagina"); echo " - Página $currpag"?></h1>
<table>
<tr id='titulo'>
<td><b>Imágen</b></td>
<td><b>Nombre de Artículo</b></td>
<td><b>Descripción</b></td>
<td><b>Precio</b></td>
<td><b>Oferta</b></td>
<td><b>Añadir al carrito</b></td>
<form name="ordenar" id="ordenar" action="categorias.php" method="get">
<h1><label for="orden">Ordenar por:</label>
<select name="orden" id="orden">
 <option value="precio">Precio</option>
 <option value="nombre">Nombre</option>
</select>
  <input type="hidden" name="categoria" value="<?php echo $categoria ?>">
 <label for="enviar">enviar</label> 
 <input type="submit" name="desplazamiento" id="enviar" value="<?php echo $desplazamiento?>" /></h1>
</form>
<?php
	if(isset($_SESSION['login_user'])){
?>
<form name="carrito" id="carrito" action="compra.php" method="POST">
<?php
}
mostrarArticulosPorCategoria();
echo "<br/></form>";

echo "<br/><br/>";
include("pie.php");

?>
