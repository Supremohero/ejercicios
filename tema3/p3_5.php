<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 5 - PHP</title>
</head>

<!--
Práctica 3.5. Haz un array indexado numéricamente que contenga las
letras del abecedario en minúsculas. Luego recórrelo, y muéstralo por
pantalla cada letra del array, primero en minúsculas y luego en
mayúsculas
 -->

<body>
<?php

	$abecedario = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	foreach($abecedario as $letra) {
		print $letra . "<br>";
	}
	foreach($abecedario as $letra) {
		echo strtoupper($letra) . "<br>";
	}



?>

</body>
</html>
