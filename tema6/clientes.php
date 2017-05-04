<?php
$titulo_pagina = "Clientes";
$descripcion = "clientes";
$keywords = "clientes, palabras clave, keywords";
include("funciones.php");
include("cabecera.php");
?>
		<h1><?php echo parametro_plantilla("titulo_pagina") ?></h1>
<table>
<tr id='titulo'>
<td><b>Nombre de Usuario</b></td>
<td><b>Nombre completo</b></td>
<td><b>Teléfono</b></td>
<td><b>E-mail</b></td>
<td id='editar'><b>Editar</b></td>
<?php
mostrarClientes();
?>
</td></tr></table><br>

<?php
include("pie.php");
?>
