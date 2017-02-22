<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 15 - PHP</title>
</head>

<!--
Práctica 3.15. Haz un formulario que solicite una frase y un
desplazamiento con el nombre “codificar.html” y, utilizando la
biblioteca de funciones “cripto.php” de la práctica 3.12 muestre el
resultado de la frase codificada en la página “codificado.php”. 
 -->

<body>
<?php
include("cripto.php");
/*
<input type="text" name="frase" value="frase">
<input type="text" name="desplazamiento" value="1">
*/
$frase = $_REQUEST["frase"];
echo $frase;
echo "<br>";
$desplazamiento=$_REQUEST["desplazamiento"];
echo "Desplazamiento de $desplazamiento letras.<br>";
codificar($frase, $desplazamiento);
echo "<br>";



?>

</body>
</html>
