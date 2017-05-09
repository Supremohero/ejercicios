<?php
$titulo_pagina = "Compra realizada";
$descripcion = "compra realizada";
$keywords = "compra, realizada, palabras clave, keywords";
require("funciones.php");
require("seguridad.php");

$username = $_SESSION['login_user'];
foreach ($_COOKIE["cesta_de_".$username] as $idarticulo => $unidades) {
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$articulo = mysqli_query($con, "select nombre from articulos WHERE id = '$idarticulo'");
	$row = mysqli_fetch_assoc($articulo);
	$nom_cookie="cesta_de_".$_SESSION['login_user'];
	setcookie($nom_cookie."[".$idarticulo."]",'', time() - 100);
}

//setcookie("carrito[ref1]", '', time()-100);

include("cabecera.php");
?>

	<h1><?php echo parametro_plantilla("titulo_pagina") ?></h1>

<br>
<p>Pedido realizado correctamente. Gracias por su compra <b> <?php echo $nombre ?></b></p>
<br>

<?php

include("pie.php");




?>

