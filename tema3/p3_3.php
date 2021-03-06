<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 3 - PHP</title>
</head>

<!--
Práctica 3.3. Comprobar si un NIF es válido. Un NIF ha de constar
exactamente de 8 números y una letra. Para comprobar si un carácter
es un número o una letra se puede usar la función ord() que nos da el
código ASCII de dicho carácter. En el código ASCII los números se
encuentran en las posiciones 48 a 57 y las letras en las posiciones 65 a 90
(mayúsculas) y 97 a 122 (minúsculas). Una vez comprobado que es
correcto debe mostrar el DNI por pantalla con la última letra en
mayúsculas, independientemente de como estuviera en el dato de
entrada.
 -->

<body>
<?php
	$cadena = "74383847j";

	function comprueba_nif($cadena) {
	$letra = strtoupper($cadena[8]);
	$numeros = substr($cadena, 0, -1);

		if (strlen($cadena) == 9) {
			for ($i = 0; $i <= 7; $i++){
				if (ord($cadena[$i]) >=57 || ord($cadena[$i]) <= 48) {
					echo "EL DNI INTRODUCIDO NO ES VÁLIDO(N)<br>";
					break;
				}
			}
		if (ord($letra) >= 90 || ord($letra) <= 65) {
			echo "EL DNI INTRODUCIDO NO ES VÁLIDO (L)<br>";
		}
		else {
			echo "DNI CORRECTO " . $numeros . $letra;
		}


		} else {
			echo "EL FORMATO DEL DNI DEBE SER SIN ESPACIOS NI GUIONES";	
		}
	}

	comprueba_nif($cadena);

?>

</body>
</html>
