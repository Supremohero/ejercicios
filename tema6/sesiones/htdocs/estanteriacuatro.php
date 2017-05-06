<?php
session_start();
include('login.php'); // Includes Login Script
?>

<!DOCTYPE html> 
<html><head>
<meta charset="utf-8">
<title>Inventario</title>
<link rel="stylesheet" href="js/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>

</head>
<?php
require ("funciones/funciones.php");
conectar();
?>
<body> 
<?php if(isset($_SESSION['login_user'])){

include ('estanteriacuatrobody.php');
}else
if(!isset($_SESSION['login_user'])){
include ('entrar.php');

};
?>
</body>
</html>
