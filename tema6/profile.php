</form>
		</div>

<?php
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = @mysql_connect("localhost", "root", "");
		// Selecting Database
		$db = mysql_select_db("curso_php", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select nombre from usuarios where username='$_SESSION[login_user]'", $connection);
		$nombre = mysql_result($query, 0);

		//$query = mysql_query("select username from usuarios where username='$_SESSION[login_user]'", $connection);
		$username = $_SESSION['login_user'];
		$query = mysql_query("select telefono from usuarios where username='$_SESSION[login_user]'", $connection);
		$telefono = mysql_result($query, 0);
		$query = mysql_query("select email from usuarios where username='$_SESSION[login_user]'", $connection);
		$email = mysql_result($query, 0);
		$query = mysql_query("select tipo from usuarios where username='$_SESSION[login_user]'", $connection);
		$tipo = mysql_result($query, 0);



?>

<h2 class="titlat">Bienvenido <?php echo $nombre ?></h2>
<div id="registro" class="cuerpolateral">
	<h1>Bienvenido <?php echo $nombre ?> </h1>
			<div id="otras" class="cuerpolateral">
			<h3>
			<ul>
			<li><a href="perfil.php">Mi perfil</a>
			<li><a href="#">Mis compras</a>
			<li><a href="#">Mi carrito de la compra</a>
			<?php
				if($tipo == 'empleado') {
				?>
					<li><a href="#">#Pedidos</a>
					<li><a href="#">#Artículos</a>
				<?php
				}
?>
			</ul>
			</h3>
		</div>
	<a href="logout.php"><button>Cerrar sesión</button></a>
</div>

