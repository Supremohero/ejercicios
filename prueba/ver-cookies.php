<?php
//micookie
if (isset($_COOKIE["micookie"])) {
	echo "He recibido el valor de una cookie y es el siguiente <i>" . $_COOKIE["micookie"] . "</i>";
}else {
	echo "No tengo la cookie micookie";
}

echo "<br><br>";

//cookie1ano
if (isset($_COOKIE["cookie1ano"])) {
	echo "Tengo la cookie que caduca más adelante en el tiempo, con valor: <i><b>" . $_COOKIE["cookie1ano"] . "</b></i>";
}else {
	echo "No tengo la cookie que caducaba en un año.";
}

echo "<br><br>";

//cookierutacompleta
if (isset($_COOKIE["cookierutacompleta"])) {
	echo "Tengo la cookie de la ruta completa, con valor: <i><b>" . $_COOKIE["cookierutacompleta"] . "</b></i>";
}else {
	echo "No tengo la cookie de la ruta completa.";
}

echo "<br><br>";

//cookierutadirectorio
if (isset($_COOKIE["cookierutadirectorio"])) {
	echo "Tengo la cookie de la ruta  de un directorio concreto, con valor: <i><b>" . $_COOKIE["cookierutadirectorio"] . "</b></i>";
}else {
	echo "No tengo la cookie de la ruta de un directorio concreto.";
}


?>

<br>
<br>
<br>
<a href="crear-cookies.php">Ir a la página para crear las cookies</a>
