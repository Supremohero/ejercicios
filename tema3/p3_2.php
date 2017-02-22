<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 2 - PHP</title>
</head>

<!--
Práctica 3.2. Hay que analizar la frase "El perro de San Roque no tiene rabo", mostrando:
• Las letras totales de la frase.
• El número de palabras de la frase.
• Una línea con el número de letras de cada palabra.
 -->

<body>
<?php
	$cadena = "El perro de San Roque no tiene rabo";
	function analizar($cadena) {
		echo "<br>FRASE A ANALIZAR: $cadena <br><br>";
		echo strlen($cadena) . " letras<br>";
		echo substr_count($cadena, " ") . " espacios en blanco<br>";
		echo substr_count($cadena, " ") + 1 . " palabras<br><br>";
		$subcadena = explode(" ", $cadena);
		for ($i = 0; $i <= substr_count($cadena, " "); $i++) {
			echo "$subcadena[$i] ". strlen($subcadena[$i]) . " letras<br>";
		}
	}

	analizar($cadena);

?>

</body>
</html>
