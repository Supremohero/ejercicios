<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 12 - PHP</title>
</head>

<!--
Práctica 3.12. Extrae el código del ejercicio 3.7 en una función
codificar() que reciba como parámetros una cadena de texto y un
número, y devuelva el texto codificado con ese desplazamiento.
Incluye en dicho script otra función que decodificar() que haga la
operación inversa. Luego guárdalo como una biblioteca de funciones
con el nombre “cripto.php”. 
 -->

<body>
<?php
include("cripto.php");

$frase = "el perro de san roque ya no tiene rabo";
echo $frase;
echo "<br>";
$desplazamiento=1;
echo "Desplazamiento de $desplazamiento letras.<br>";
codificar($frase, $desplazamiento);
echo "<br>";


?>

</body>
</html>
