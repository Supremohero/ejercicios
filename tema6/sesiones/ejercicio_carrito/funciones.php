<?php
session_start();
function mostrar_carrito() {
require("compra.php");
	echo "<h1>Contenido del carrito</h1>";
	if (isset ($_COOKIE["carrito"])) {
		echo "<table border='1px,solid,black'> <tr> <td><b>Referencia</b></td> <td><b>Unidades</b></td> </tr>";
		foreach ($_COOKIE["carrito"] as $valor => $var) {
			echo "<tr> <td>$valor</td> <td>$var</td> </tr>";
		}
		echo "<tr><td colspan='2'>Número total de unidades: $unidadestotal </td></tr></table>";
	}else {
		echo "El carrito está vacío";
	}
echo '<br><a href="tienda.php"><button>Seguir comprando</button></a><a href="realizarcompra.php"><button>Finalizar compra</button></a><br>';
}


function estantes() {
echo '
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
';
}


?>
