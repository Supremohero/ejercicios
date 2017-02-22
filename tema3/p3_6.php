<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 6 - PHP</title>
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


function codificar($frase, $desplazamiento){
	if ($desplazamiento > 26) {
		$desplazamiento = $desplazamiento % 26;
	}

	for ($i=0; $i<strlen($frase);$i++){
		$letra= ord($frase[$i]);
		$letra_desplazada=$letra+$desplazamiento;

		if($letra_desplazada>122){
			echo chr($letra_desplazada-26);
		}else if($letra==32){
			echo " ";
		}else{
			echo chr($letra_desplazada);
		}
	}
}

$frase = "el perro de san roque ya no tiene rabo";
echo $frase;
echo "<br>";
$desplazamiento=1;
echo "Desplazamiento de $desplazamiento letras.<br>";
codificar($frase, $desplazamiento);





?>

</body>
</html>
