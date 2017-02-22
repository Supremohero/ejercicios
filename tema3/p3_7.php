<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 7 - PHP</title>
</head>

<!--
Práctica 3.7. Modifica el programa anterior para que el desplazamiento
sea variable. Es decir, en un desplazamiento 3 se transforma la letra por
la que está 3 posiciones más adelante.
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
$desplazamiento=3;
echo "Desplazamiento de $desplazamiento letras.<br>";
codificar($frase, $desplazamiento);






?>

</body>
</html>
