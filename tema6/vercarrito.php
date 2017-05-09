<?php
$username = $_SESSION['login_user'];
if (!isset ($_COOKIE["cesta_de_".$username])) {
		echo "<h1>El carrito está vacío";
	}
	else {
		mostrarCarrito();
	}

?>
<br/>
