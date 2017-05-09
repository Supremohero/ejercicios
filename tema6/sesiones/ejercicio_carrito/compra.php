<?php
$ref = key($_REQUEST);
$unidadestotal = 0;

	if (isset ($_COOKIE["carrito"]["ref1"])) {
		$ref1unidades = $_COOKIE["carrito"]["ref1"];
		$unidadestotal = $unidadestotal + $ref1unidades;
	} else {
		$ref1unidades = 0;
	}

	if (isset ($_COOKIE["carrito"]["ref2"])) {
		$ref2unidades = $_COOKIE["carrito"]["ref2"];
		$unidadestotal = $unidadestotal + $ref2unidades;
	} else {
		$ref2unidades = 0;
	}

	if (isset ($_COOKIE["carrito"]["ref3"])) {
		$ref3unidades = $_COOKIE["carrito"]["ref3"];
		$unidadestotal = $unidadestotal + $ref3unidades;

	} else {
		$ref3unidades = 0;
	}

switch ($ref) {
	case "ref1":
		$ref1unidades = $ref1unidades + 1;
		setcookie("carrito[$ref]", $ref1unidades, time() + 360000);
		header('Location: tienda.php');
		break;

	case "ref2":
		$ref2unidades = $ref2unidades + 1;
		setcookie("carrito[$ref]", $ref2unidades, time() + 360000);
		header('Location: tienda.php');
		break;
		
	case "ref3":
		$ref3unidades = $ref3unidades + 1;
		setcookie("carrito[$ref]", $ref3unidades, time() + 360000);
		header('Location: tienda.php');
		break;
}



?>

