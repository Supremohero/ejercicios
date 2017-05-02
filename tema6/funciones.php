<?php
session_start(); // Starting Session
define ("HOSTNAME","mysql.hostinger.es");
define ("DATABASE","u963447591_dani");
define ("USER_DB","u963447591_root");
define ("PASSWORD_DB","tooroot");



function parametro_plantilla($variable){
	if (isset($GLOBALS[$variable])) {
		echo $GLOBALS[$variable];
	} else {
		echo "Sin dato cargado: " . $variable;
	}
}







?>


