<?php
include("funciones.php");
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	if (mysqli_connect_errno()) {
   		printf("Conexión fallida: %s\n", mysqli_connect_error());
    		exit();
	}
if(!isset($_REQUEST['enviar'])){
	$dni = $_REQUEST["dni"];
} else {
	$dni = $_REQUEST["nif"];
}
$sql = "SELECT * FROM clientes WHERE dni = '$dni'";

	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$dni = $row["DNI"];
			$nombre = $row["nombre"];
			$direccion = $row["direccion"];
			$localidad = $row["localidad"];
			$provincia = $row["provincia"];
			$telefono = $row["telefono"];
			$email = $row["email"];
		}
		mysqli_free_result($result);
	}

if(isset($_REQUEST['enviar'])){
	$nombre = $_POST["nombre"];
	$dni = $_POST["nif"];
	$direccion = $_POST["direccion"];
	$localidad = $_POST["localidad"];
	$provincia = $_POST["provincia"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];

	//validar campos
	$er_nombre = "/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*){2,}$/";
	$er_direccion = "/^.{5,}$/";
	$er_provincia = "/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/";
	$er_localidad = "/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/";
	$er_telefono = "/^\d{9}$/";
	$er_email = "/^(.+\@.+\..+)$/"; 

	if (!preg_match($er_nombre, $nombre)) {
		$nombre = "";
	}
	if (!preg_match($er_direccion, $direccion)) {
		$direccion = "";
	}
	if (!preg_match($er_provincia, $provincia)) {
		$provincia = "";
	}
	if (!preg_match($er_localidad, $localidad)) {
		$localidad = "";
	}
	if (!preg_match($er_telefono, $telefono)) {
		$telefono = "";
	}
	if (!preg_match($er_email, $email)) {
		$email = "";
	}
	
	if(empty($nombre)|empty($direccion)|empty($localidad)|empty($provincia)|empty($telefono)|empty($email)) {
		//los que esten vacios se ponen de rojo
		if(empty($nombre)) {
			$cNombre = "incorrecto";
		} else {
			$cNombre = "correcto";
		}

		if(empty($direccion)) {
			$cDireccion = "incorrecto";
		} else {
			$cDireccion = "correcto";
		}

		if(empty($localidad)) {
			$cLocalidad = "incorrecto";
		} else {
			$cLocalidad = "correcto";
		}

		if(empty($provincia)) {
			$cProvincia = "incorrecto";
		} else {
			$cProvincia = "correcto";
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

	} else { // si todo es correcto modificamos y redirigimos
		$sql = "UPDATE clientes SET nombre = '$nombre', direccion = '$direccion', localidad = '$localidad', provincia = '$provincia', telefono = '$telefono', email = '$email' WHERE DNI = '$dni'";
		mysqli_query($con, $sql);
		header("Location: index.php");
	}
}
mysqli_close($con);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>Editar Cliente</title>
</head>

<body>
<fieldset>
<legend>Modificar datos</legend>
<form name="formulario" id="formulario" action="editarcliente.php" method="post">
  <label for="nombre" id="<?php echo $cNombre ?>">Nombre y apellidos:</label>
  <input type="text" name="nombre" id="nombre" maxlength="50" value="<?php echo $nombre ?>"/><br/>
  	<input name="nif" type=hidden id="nif" value="<?php echo $dni ?>"/>
  <label for="direccion" id="<?php echo $cDireccion ?>">Dirección:</label>
  <input name="direccion" type="text" id="direccion" maxlength="100" value="<?php echo $direccion ?>"/><br/>
  <label for="localidad" id="<?php echo $cLocalidad ?>">Localidad:</label>
  <input name="localidad" type="text" id="localidad" maxlength="20" value="<?php echo $localidad ?>" /><br/>
  <label for="provincia" id="<?php echo $cProvincia ?>">Provincia:</label>
  <input name="provincia" type="text" id="provincia" maxlength="20" value="<?php echo $provincia ?>" /><br/>
  <label for="telefono" id="<?php echo $cTelefono ?>">Teléfono:</label>
  <input name="telefono" type="text" id="telefono" maxlength="9" value="<?php echo $telefono ?>"/><br/>
  <label for="email" id="<?php echo $cEmail ?>">E-mail:</label>
  <input name="email" type="text" id="email" maxlength="40" value="<?php echo $email ?>" /><br/>
  <input type="submit" name="enviar" id="enviar" value="Guardar datos"/>
  <input type="reset" name="limpiar" id="button" value="Restablecer datos" ><br/>
</form> 
</fieldset>
</body>
<a href="index.php"><h1>Volver al índice</h1></a>
</html>
