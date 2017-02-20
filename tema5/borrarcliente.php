<?php
include("funciones.php");
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	if (mysqli_connect_errno()) {
   		printf("Conexión fallida: %s\n", mysqli_connect_error());
    		exit();
	}
if(isset($_REQUEST['aceptado'])){
	$dni = $_REQUEST["dni"];
	$sql = "DELETE FROM clientes WHERE DNI = '$dni'";
	mysqli_query($con, $sql);
	header("Location: index.php");
}
if(isset($_REQUEST['cancelado'])){
	header("Location: index.php");
}

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tema 5</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
if(!isset($_REQUEST['cancelado'])&&!isset($_REQUEST['aceptado'])) {
echo "<h1>Está seguro de borrar el siguiente usuario?</h1>";

$dni = $_REQUEST["dni"];
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
		$dni = $row["DNI"];
		echo "<table>
		<tr id='titulo'>
		<td><b>DNI</b></td>
		<td><b>Nombre</b></td>
		<td><b>Dirección</b></td>
		<td><b>Localidad</b></td>
		<td><b>Provincia</b></td>
		<td><b>Teléfono</b></td>
		<td><b>e-mail</b></td></tr>";
		printf ("%s %s %s %s %s %s %s", "<tr><td>" . $row["DNI"], "</td><td>" . $row["nombre"], "</td><td>" . $row["direccion"],  "</td><td>" . $row["localidad"], "</td><td>" .  $row["provincia"],  "</td><td>" . $row["telefono"], "</td><td>" .  $row["email"]);
echo "</td></tr></table>";
		echo "<a href='borrarcliente.php?cancelado'><button>Cancelar</button></a>";
		echo "<a href='borrarcliente.php?aceptado&dni=$dni'><button>Aceptar</button></a>";
	}
	mysqli_free_result($result);
}


}
mysqli_close($con);
?>
</body>
</html>

