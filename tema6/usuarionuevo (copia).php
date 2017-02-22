<?php
include("funciones.php");
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	if (mysqli_connect_errno()) {
   		printf("Conexión fallida: %s\n", mysqli_connect_error());
    		exit();
	}

if(isset($_REQUEST['enviar'])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];

	//validar campos
	$er_nombre = "/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*){2,}$/";
	$er_username = "/^\d{8}[a-zA-Z]$/";//asdsadssa
	$er_password = "/^\d{8}[a-zA-Z]$/";//asdsdasda
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
		$codigo = "SELECT * FROM clientes WHERE username = '$username'";
		$result = mysqli_query($con, $codigo);
		$rows = mysqli_num_rows($result);
		if($rows == 1) {
			$cUsername = "incorrecto";
			echo "<h1>El usuario $usuario ya existe.</h1>";
			$usuario = "";
		} else {
			// si todo es correcto se crea el usuario y se redirige al indice
			$sql = "INSERT INTO login (username, password, nombre, telefono, email) VALUES" .
			"('$username', '$password', '$nombre', '$telefono', '$email')";	
			mysqli_query($con, $sql);
			header("Location: index.php");
		}
	}
}
mysqli_close($con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo usuario</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
<fieldset>
<legend>Usuario nuevo</legend>
<form name="formulario" id="formulario" action="usuarionuevo.php" method="post">
<?php
if(!isset($_REQUEST['enviar'])){
?>
  <label for="username">Usuario:</label>
  <input name="username" type="text" id="username" maxlength="30" /><br/>
  <label for="password">Contraseña:</label>
  <input name="password" type="password" id="password" maxlength="30" /><br/>
  <label for="nombre">Nombre y apellidos:</label>
  <input type="text" name="nombre" id="nombre" maxlength="50" /><br/>
  <label for="telefono">Teléfono:</label>
  <input name="telefono" type="text" id="telefono" maxlength="9" /><br/>
  <label for="email">E-mail:</label>
  <input name="email" type="text" id="email" maxlength="40" /><br/>
<?php
} else {
?>
  <label for="username" id="<?php echo $cUsername ?>">Usuario:</label>
  <input name="username" type="text" id="username" maxlength="30" value="<?php echo $username ?>"/><br/>
  <label for="password" id="<?php echo $cPassword ?>">Contraseña:</label>
  <input name="password" type="password" id="password" maxlength="30" value="<?php echo $password ?>"/><br/>
  <label for="nombre" id="<?php echo $cNombre ?>">Nombre y apellidos:</label>
  <input type="text" name="nombre" id="nombre" maxlength="50" value="<?php echo $nombre ?>"/><br/>
  <label for="telefono" id="<?php echo $cTelefono ?>">Teléfono:</label>
  <input name="telefono" type="text" id="telefono" maxlength="9" value="<?php echo $telefono ?>"/><br/>
  <label for="email" id="<?php echo $cEmail ?>">E-mail:</label>
  <input name="email" type="text" id="email" maxlength="40" value="<?php echo $email ?>" /><br/>
<?php
}
?>
  <input type="submit" name="enviar" id="enviar" value="Enviar"/>
  <input type="reset" name="limpiar" id="button" value="Restablecer datos" /><br/>
</form> 
</fieldset>
<a href="index.php"><h1>Volver al índice</h1></a>
</body>
</html>
