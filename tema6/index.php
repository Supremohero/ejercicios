<?php
session_start(); // Starting Session
$titulo_pagina = "Primer Include";
$descripcion = "Primer include";
$keywords = "primer, include, palabras clave, keywords";
include("funciones.php");
include("cabecera.php");
?>
		<h1><?php echo parametro_plantilla("titulo_pagina") ?></h1>
		<p>		
		En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer.
		En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. 
		</p>
		<p>		
		En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer.
		En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. 
		En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer.
		En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. 
		</p>
		<p>		
		En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer.
		En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. En este artículo vamos a conocer. 
		</p>
<?php
include("pie.php");
?>
