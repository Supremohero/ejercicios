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
