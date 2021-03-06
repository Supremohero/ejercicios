<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 4 - PHP</title>
</head>

<!--
Práctica 3.4. Mejora el ejemplo 3.1.7 para comprobar
que la dirección de email no contiene espacios en blanco.
 -->

<body>
<?php
	$email = "maurodosantos@pernambuco.com";
	echo "Email a analizar: '$email' <br>";
	echo "<br>";
	echo "Tiene " . strlen($email) . " letras. <br>";
	// Indica la posición del caracter "@" o FALSE si no está
	$posicion_arroba = strpos($email, "@");
	// Busca la aparición de un punto (.) a partir de la arroba
	$posicion_punto = strpos($email, ".", $posicion_arroba);
	// Busca la aparición de un espacio en blanco
	$posicion_espacio = strpos($email, " ");
	if ($posicion_arroba && $posicion_punto && !$posicion_espacio) {	
		echo "Es una dirección de email válida<br>";
 		$usuario = substr($email, 0, $posicion_arroba);
		$dominio = substr($email, $posicion_arroba + 1);
		echo "El nombre de usuario es: $usuario<br>";
		echo "El dominio es: $dominio<br>";
	} else {
		echo "No es una dirección de email válida<br>";
		if (!$posicion_arroba) {
			echo "Le falta el caracter arroba<br>";
		}
		if (!$posicion_punto) {
			echo "El dominio no es válido<br>";
		}
		if ($posicion_espacio) {
			echo "Elimine los espacios en blanco<br>";
		}
	}
	



?>

</body>
</html>
