<?php

require("funciones.php");
require("compra.php");
require("../seguridad.php");
echo "<h1>Mi Tienda</h1>";
echo "<br>";

require ("compra.php");	
echo 'Bienvenido <b>';
echo $_SESSION["user"];
echo '</b><br>';
if (!isset ($_COOKIE["carrito"])) {
		echo "El carrito está vacío";
	}
	else {
		echo "Llevas $unidadestotal artículos seleccionados.";
	}

estantes();

?>

<html>
<head>
<meta charset="utf-8">
<title>Tienda</title>
</head>

<body>

</body>
</html>
