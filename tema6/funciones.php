<?php
define ("HOSTNAME","localhost");
define ("DATABASE","curso_php");
define ("USER_DB","root");
define ("PASSWORD_DB","");
function parametro_plantilla($variable){
	if (isset($GLOBALS[$variable])) {
		echo $GLOBALS[$variable];
	} else {
		echo "Sin dato cargado: " . $variable;
	}
}







?>


