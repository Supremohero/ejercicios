<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 2.14 - PHP</title>
</head>

<!--
Daniel Muñoz Chacón

Práctica 2.14. Modifica el programa anterior para que distinga entre AM y PM.
 -->

<body>
<?php
$i = 12; // inicializamos la variable de las horas para empezar en 12

for ($j = 0; $j < 46; $j = $j + 15) { // bucle para los minutos
    print "Son las $i AM y $j minutos.";
    print "<br>";
}


for ($i = 1; $i < 12; $i++) {       // bucle para las horas
    for ($j = 0; $j < 46; $j = $j + 15) {   // bucle para los minutos
        print "Son las $i AM y $j minutos.";
	print "<br>";
    }
} // fin del bucle de las primeras 12 horas AM

for ($j = 0; $j < 46; $j = $j + 15) {
    print "Son las $i PM y $j minutos.";
    print "<br>";
}

for ($i = 1; $i < 12; $i++) {
    for ($j = 0; $j < 46; $j = $j + 15) {
        print "Son las $i PM y $j minutos.";
	print "<br>";
    }
} // fin del bucle de las ultimas 12 horas PM

?>
</body>
</html>
