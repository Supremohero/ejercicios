<?php
@session_start(); // starting session
$ref = key($_REQUEST);

if($_POST) {

$username = $_SESSION['login_user'];
	if (isset ($_COOKIE["cesta_de_".$username][$ref])) {
		$unidades = $_COOKIE["cesta_de_".$username][$ref];
		$nom_cookie="cesta_de_".$_SESSION['login_user'];
		setcookie($nom_cookie."[".$ref."]",$unidades + 1, time() + 2600000);
	} else {
			
			$nom_cookie="cesta_de_".$_SESSION['login_user'];
			setcookie($nom_cookie."[".$ref."]",1, time() + 2600000);
	}
header("Location:carrito.php");
}


?>

