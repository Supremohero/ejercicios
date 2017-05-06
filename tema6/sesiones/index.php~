<html>
<head>
<title>Servidor PHP</title>
<link href="./src/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>PHP Login Session</h1>
<div id="login">
<?php
if (isset($_GET["errorusuario"])){
	if ($_GET["errorusuario"]=="si"){
		echo '<h2>DATOS INCORRECTOS</h2>';
	}else{
		echo '<h2>Introduce tus datos</h2>';
	}
}else{
	echo '<h2>Introduce tus datos</h2>';
}
?>
<form action="login.php" method="post">
<label>Usuario :</label>
<input name="usuario" placeholder="usuario" type="text">
<label>Contraseña :</label>
<input name="passwd" placeholder="**********" type="password">
<input name="enviar" type="submit" value=" Login ">
</form>
</div>
</div>
</body>
</html>
