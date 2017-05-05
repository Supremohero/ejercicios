<html>
<head>
	<title><?php parametro_plantilla("titulo_pagina"); ?></title>
	<link rel="STYLESHEET" type="text/css" href="estilo.css">
	<meta name="Description" content='<?php parametro_plantilla("descripcion"); ?>'>
	<meta name="Keywords" content='<?php parametro_plantilla("keywords"); ?>'>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>
<div id="borde">
<div id="contenedor">
	<div id="cabecera"><img src="img/cabecera.png" width="700" height="106" alt="Tienda Daniel Muñoz" border="0"></div>
	<div id="navegador">
		<a href="index.php" class="enlacenav">Inicio</a> |  
		<a href="#" class="enlacenav">Quienes somos</a> | 
		<a href="#" class="enlacenav">Contacto</a> | 
		<a href="#" class="enlacenav">Información sobre los envíos</a> | 
		<a href="#" class="enlacenav">Condiciones generales</a>
	</div>





	<div id="lateral">
		<h2 class="titlat">Buscar artículos</h2>
		<div id="fbuscar" class="cuerpolateral">
			<form>
				<div id="campotexto"><input type="text" name="criterio"></div>
				<div id="botonbuscar"><input type=image src="img/go.gif" width="25" height="15"></div>
			</form>
		</div>
		<div id="login">
<?php
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = @mysql_connect("localhost", "root", "");
	//arreglar problema con acentos
	mysql_query("SET NAMES 'utf8'");
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		$username = strtolower($username);
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// Selecting Database
		$db = mysql_select_db("curso_php", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from usuarios where password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
		} else {
			$error = "Usuario o contraseña incorrecto";
		}
	}

	if(isset($_SESSION['login_user'])){
		include ('profile.php');
	}
	else {
		include ('login.php');
	}

?>
		<h2 class="titlat">Carrito de la compra</h2>
		<div id="otras" class="cuerpolateral">

		</div>
	</div>
		<!-- Fin del lateral derecho e inicio del lateral izquierdo -->

	<div id="lateral2">
		<h2 class="titlat">Categorías</h2>
		<div id="otras" class="cuerpolateral">
			Mostrar categorías.<br/>Mostrar categorías.<br/>Mostrar categorías.
		</div>
	</div>







	<div id="cuerpo">
