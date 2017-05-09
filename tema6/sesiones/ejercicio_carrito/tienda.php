<?php
require("funciones.php");
require("compra.php");
require("../seguridad.php");
echo "<h1>Mi Tienda</h1>";
echo "<br>";

require ("compra.php");	
echo '</b>';
if (!isset ($_COOKIE["carrito"])) {
		echo "El carrito está vacío";
	}
	else {
		echo "Llevas $unidadestotal artículos seleccionados.";
	}

estantes();

?>

<form name="formulario" method="get" action="compra.php">
<table border="1px,solid,black">
<tr>
	<td><b>Referencia</b></td>
	<td><b>Descripción</b></td>
	<td><b>Precio</b></td>
	<td></td>
</tr>

<tr>
	<td>ref1</td>
	<td>Descripcion articulo 1</td>
	<td>5€</td>
	<td><input type="submit" name="ref1" value="Comprar"></td>
</tr>

<tr>
	<td>ref2</td>
	<td>Descripcion articulo 2</td>
	<td>3€</td>
	<td><input type="submit" name="ref2" value="Comprar"></td>
</tr>

<tr>
	<td>ref3</td>
	<td>Descripcion articulo 3</td>
	<td>2€</td>
	<td><input type="submit" name="ref3" value="Comprar"></td>
</tr>
</table>
</form>
<a href="vercarrito.php"><button>Ver carrito</button></a>
<a href="../logout.php"><button>Cerrar sesión</button></a>
