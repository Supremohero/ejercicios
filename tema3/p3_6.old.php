<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio  - PHP</title>
</head>

<!--
Práctica 3.6. Haz un programa para codificar por desplazamiento una
frase utilizando el array de letras del ejercicio anterior. La idea es que
convierta cada letra por la siguiente del abecedario y a la última le
asigne la primera letra: a la "a" le corresponde la "b", a la "b" la "c", y así
sucesivamente hasta que a la "z" la "a". Si la frase contiene espacios
debe dejarlos igual.
 -->

<body>
<?php
	$abecedario = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	$codificado = array();
	
	for ($i = 0; $i <= 25; $i++) {
		if ($i == 25) {
			$codificado[] = $abecedario[0];
		} else {
		$codificado[] = $abecedario[$i+1];
		}
	}
	

	function codificar($cadena, $abecedario, $codificado){

		foreach ($abecedario as $valor) {
			str_replace($abecedario[$valor], $codificado[$valor], $cadena);
		}
echo $cadena;
	}


$frase = "El perro de San Roque ya no tiene rabo";

codificar($frase, $abecedario, $codificado);

echo $frase;











	/*foreach($codificado as $valor) {
		echo $valor;
	}*/

?>

</body>
</html>
