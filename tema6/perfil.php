<?php
$titulo_pagina = "Mi perfil";
$descripcion = "Perfil";
$keywords = "perfil, palabras clave, keywords";
include("funciones.php");
include("cabecera.php");

?>
		<h1><?php echo parametro_plantilla("titulo_pagina") ?></h1>
		Usuario: <?php echo $username ?><br/>
		Nombre: <?php echo $nombre ?><br/>
		Teléfono: <?php echo $telefono ?><br/>
		E-mail: <?php echo $email ?><br/>
		Tipo de cuenta: <?php echo $tipo ?><br/>

<?php

include("pie.php");
?>
