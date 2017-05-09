<?php
$titulo_pagina = "Finalizando la compra";
$descripcion = "finalizando la compra";
$keywords = "finalizando, la, compra, palabras clave, keywords";

require("funciones.php");
//include("seguridad.php"); // al tener el carrito en las cookies no es necesario que este autenticado



include("cabecera.php");
?>

	<h1><?php echo parametro_plantilla("titulo_pagina") ?></h1>
	<br/>
<?php
	if(isset($_SESSION['login_user'])){
		echo "En construcción<br/>";//AQUÍ IRÍA TODO LO DE FINALIZAR LA COMPRA JUNTO A UN BOTON PARA REALIZAR EL PEDIDO QUE BORRA LAS COOKIES
		echo "<a href='comprafinalizada.php'><button>Realizar pedido</button></a>";
		
	}
	else {
		echo "<h1>Debe entrar en su cuenta antes de poder realizar el pedido.</h1>";
		echo "<h1><a href='usuarionuevo.php'>Si no tiene una cuenta haga click aquí para registrarse</a></h1>";
	}


?>


<?php

include("pie.php");
?>
