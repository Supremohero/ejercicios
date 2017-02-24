<?php
session_start(); 
session_unset();
session_destroy(); 
$parametros_cookies = session_get_cookie_params(); 
setcookie(session_name(),0,1,$parametros_cookies["path"]);
header("Location: index.php");
?>
<!--
<html> 
<head> 
<title>Has salido!!</title> 
</head> 
<body> 
Gracias por tu acceso 
<br> 
<br> 
<a href="index.php">Formulario de autentificación</a> 
</body> 
</html>
-->
