<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Biblioteca Cripto</title>
</head>

<!--
Biblioteca de funciones Cripto.php
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


?>

</body>
</html>
