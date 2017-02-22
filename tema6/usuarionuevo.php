<?php
include("funciones.php");
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	if (mysqli_connect_errno()) {
   		printf("Conexión fallida: %s\n", mysqli_connect_error());
    		exit();
	}

if(isset($_REQUEST['enviar'])){
	$username = $_POST["username"];
	$username = strtolower($username);
	$password = $_POST["password"];
	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];

	//validar campos
	$er_nombre = "/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*){2,}$/";
	$er_username = "/^[a-zA-Z0-9]{3,30}$/";
	$er_password = "/^[a-zA-Z0-9]{8,30}$/";
	$er_telefono = "/^\d{9}$/";
	$er_email = "/^(.+\@.+\..+)$/"; 

	if (!preg_match($er_nombre, $nombre)) {
		$nombre = "";
	}
	if (!preg_match($er_username, $username)) {
		$username = "";
	}
	if (!preg_match($er_password, $password)) {
		$password = "";
	}
	if (!preg_match($er_telefono, $telefono)) {
		$telefono = "";
	}
	if (!preg_match($er_email, $email)) {
		$email = "";
	}
	
	if(empty($nombre)|empty($username)|empty($password)|empty($telefono)|empty($email)) {
		//los que esten vacios se ponen de rojo
		if(empty($nombre)) {
			$cNombre = "incorrecto";
		} else {
			$cNombre = "correcto";
		}

		if(empty($username)) {
			$cUsername = "incorrecto";
		} else {
			$cUsername = "correcto";
		}

		if(empty($password)) {
			$cPassword = "incorrecto";
		} else {
			$cPassword = "correcto";
		}

		if(empty($telefono)) {
			$cTelefono = "incorrecto";
		} else {
			$cTelefono = "correcto";
		}

		if(empty($email)) {
			$cEmail = "incorrecto";
		} else {
			$cEmail = "correcto";
		}
		
		
		echo "<h1>Algunos datos son incorrectos</h1>";

	}else {
		$codigo = "SELECT * FROM usuarios WHERE username = '$username'";
		$result = mysqli_query($con, $codigo);
		$rows = mysqli_num_rows($result);
		if($rows == 1) {
			$cUsername = "incorrecto";
			echo "<h1>El usuario $username ya existe.</h1>";
			$usuario = "";
		} else {
			// si todo es correcto se crea el usuario y se redirige al indice
			$sql = "INSERT INTO usuarios (username, password, nombre, telefono, email, tipo) VALUES" .
			"('$username', '$password', '$nombre', '$telefono', '$email', 'cliente')";	
			mysqli_query($con, $sql);
			header("Location: index.php");
		}
	}
}
mysqli_close($con);
include("cabecera.php");
?>
<fieldset>
<legend>Usuario nuevo</legend>
<form name="formulario" id="formulario" action="usuarionuevo.php" method="post">
<?php
if(!isset($_REQUEST['enviar'])){
?>
  <label for="username">Usuario:</label></br>
  <input name="username" type="text" id="username" maxlength="30" />
  <img src="img/about.png" width="12px" height="12px" alt="info" title="Solo letras y números. Entre 3 y 30 caracteres."><br/>
  <label for="password">Contraseña:</label></br>
  <input name="password" type="password" id="password" maxlength="30" />
  <img src="img/about.png" width="12px" height="12px" alt="info" title="Solo letras y números. Entre 8 y 30 caracteres."><br/>
  <label for="nombre">Nombre y apellidos:</label></br>
  <input type="text" name="nombre" id="nombre" maxlength="50" /><br/>
  <label for="telefono">Teléfono:</label></br>
  <input name="telefono" type="text" id="telefono" maxlength="9" /><br/>
  <label for="email">E-mail:</label></br>
  <input name="email" type="text" id="email" maxlength="40" /><br/>
<?php
} else {
?>
  <label for="username" id="<?php echo $cUsername ?>">Usuario:</label></br>
  <input name="username" type="text" id="username" maxlength="30" value="<?php echo $username ?>"/>
  <img src="img/about.png" width="12px" height="12px" alt="info" title="Solo letras y números. Entre 3 y 30 caracteres."><br/>
  <label for="password" id="<?php echo $cPassword ?>">Contraseña:</label></br>
  <input name="password" type="password" id="password" maxlength="30" value="<?php echo $password ?>"/>
  <img src="img/about.png" width="12px" height="12px" alt="info" title="Solo letras y números. Entre 8 y 30 caracteres."><br/>
  <label for="nombre" id="<?php echo $cNombre ?>">Nombre y apellidos:</label></br>
  <input type="text" name="nombre" id="nombre" maxlength="50" value="<?php echo $nombre ?>"/><br/>
  <label for="telefono" id="<?php echo $cTelefono ?>">Teléfono:</label></br>
  <input name="telefono" type="text" id="telefono" maxlength="9" value="<?php echo $telefono ?>"/><br/>
  <label for="email" id="<?php echo $cEmail ?>">E-mail:</label></br>
  <input name="email" type="text" id="email" maxlength="40" value="<?php echo $email ?>" /><br/>
<?php
}
?>
  <input type="submit" name="enviar" id="enviar" value="Enviar"/>
  <input type="reset" name="limpiar" id="button" value="Restablecer datos" /><br/>
</form> 
</fieldset>
<?php
include("pie.php");
?>
