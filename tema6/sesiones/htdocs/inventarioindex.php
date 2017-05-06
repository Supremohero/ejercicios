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

echo "USUARIO LOGUEADO";
echo "<br>";
}else
if(!isset($_SESSION['login_user'])){
include ('entrar.php');

};
?>
<div data-role="page" id="page">
    <div data-role="header" data-position="fixed" class="ui-header" data-theme="b"> 
    <?php include ('header.php'); ?>
	</div>
	<?php include ('preferencias.php'); ?>
	<div role="main" class="ui-content">
    	<ul data-role='listview' data-split-icon='gear' data-split-theme='a' data-inset='true' data-filter="true" data-filter-placeholder="Buscar inventario">
        	<?php portada();?>
        </ul>
	</div>
    <?php include ('footer.php');?>    

</div>
</body>
</html>
