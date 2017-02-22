<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 1 - PHP</title>
</head>

<!--
Práctica 3.1. Crea la función mostrar_impares que muestre los caracteres en posiciones impares de la 
cadena que se le suministre como parámetro. Ejecútalo enviándole la frase "A quien madruga Dios le ayuda"
 -->

<body>
<?php
	$cadena = "A quien madruga Dios le ayuda";
	function mostrar_impares($cadena) {

		for ($i = 0; $i <= strlen($cadena); $i = $i+2) {
			$j = $i+1;
			echo "Caracter en la posición $j : ´$cadena[$i]´<br>";
		}
	}

	mostrar_impares($cadena);

?>

</body>
</html>
