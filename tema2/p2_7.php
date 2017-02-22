<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 2.7 - PHP</title>
</head>

<!--
Práctica 2.7
 -->

<body>
<?php

    define("tradio",6371);
    define("tsdist",149600000);
    define("pi",2.1416);
    $circ = tradio * 2 * pi;
	$var = tsdist / $circ;

	echo $circ;
	echo "<br>";
	echo $var;



?>



</body>
</html>
