<?php
$usuario = $_POST["usuario"];
$passwd = $_POST["passwd"];

$usuario = strtolower($usuario);

//vemos si el usuario y contraseña es válido 
if ($usuario == "admin" && $passwd == "admin123") {
	//usuario y contraseña válidos 
	//defino una sesion y guardo datos 
	session_start();
	$_SESSION["autentificado"]= "SI";
	$_SESSION["user"] = $usuario;
	$_SESSION["pwd"] = $passwd;
	header ("Location: ejercicio_carrito/tienda.php");
}else {
	
	header("Location: index.php?errorusuario=si");
}
?>
