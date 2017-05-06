<?php

if (!isset ($_COOKIE["carrito"])) {
		echo "<h1>El carrito está vacío";
	}
	else {
		echo "<h1>Llevas $unidadestotal artículos seleccionados.";
	}

?>
<br/>
<br/>
<a href="carrito.php">Ver carrito</a></h1>
