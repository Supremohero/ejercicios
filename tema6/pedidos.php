<?php
$titulo_pagina = "Pedidos";
$descripcion = "pedidos";
$keywords = "pedidos, palabras clave, keywords";
include("funciones.php");
include("cabecera.php");
?>
		<h1><?php echo parametro_plantilla("titulo_pagina") ?></h1>
<table>
<tr id='titulo'>
<td><b>Número de pedido</b></td>
<td><b>Cliente</b></td>
<td><b>Fecha</b></td>
<td><b>Contenido</b></td>
<td><b>Pago</b></td>
<td><b>Envío</b></td>
<?php
mostrarPedidos();
?>
</td></tr></table><br>

<?php
include("pie.php");
?>
