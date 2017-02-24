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
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		$username = strtolower($username);
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = @mysql_connect("localhost", "root", "");
		// To protect MySQL injection for Security purpose
		//$username = stripslashes($username);
		//$password = stripslashes($password);
		//$username = mysql_real_escape_string($username);
		//$password = mysql_real_escape_string($password);
		// Selecting Database
		$db = mysql_select_db("curso_php", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from usuarios where password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			//$_SESSION["autentificado"]= "SI";
			$_SESSION['login_user']=$username; // Initializing Session
		} else {
			$error = "Username or Password is invalid";
		}
			mysql_close($connection); // Closing Connection
}

if(isset($_SESSION['login_user'])){
  include ('profile.php');
}
else {
  include ('login.php');
}

?>



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
