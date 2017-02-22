		<div id="navabajo">
		<a href="#">Volver</a> | 
		<a href="#">Portada</a> | 
		<a href="#">Mapa del sitio</a>
		</div>
	</div>
	<div id="lateral">
		<h2 class="titlat">Buscar</h2>
		<div id="fbuscar" class="cuerpolateral">
			<form>
				<div id="campotexto"><input type="text" name="criterio"></div>
				<div id="botonbuscar"><input type=image src="img/go.gif" width="25" height="15"></div>
				<div class="radio"><input type="radio" name="op" value="1"> En la Web del invierno</div>
				<div class="radio"><input type="radio" name="op" value="2"> En toda la Web</div>
			</form>
		</div>
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
<input name="username" placeholder="usuario" type="text">
<label>Contraseña :</label>
<input name="password" placeholder="**********" type="password">
<input name="enviar" type="submit" value=" Login ">
</form><a href="logout.php">Logout</a>
</div>

		<h2 class="titlat">Registro</h2>
		<div id="registro" class="cuerpolateral">
			<a href="usuarionuevo.php">Registrese con nosotros</a> y obtenga muchas ventajas.
		</div>

		<h2 class="titlat">Otras informaciones</h2>
		<div id="otras" class="cuerpolateral">
			<ul>
			<li><a href="#">Quienes somos</a>
			<li><a href="#">Nuestra misión</a>
			<li><a href="#">Agenda de eventos</a>
			</ul>
		</div>
	</div>
	<div id="pie">
		Pruebas &copy; 2017 DaniSemipresencial.tk
	</div>
</div>
</div>
</body>
</html>
