<?php
session_start(); // Starting Session
define ("HOSTNAME","localhost");
define ("DATABASE","curso_php");
define ("USER_DB","root");
define ("PASSWORD_DB","");
function parametro_plantilla($variable){
	if (isset($GLOBALS[$variable])) {
		echo $GLOBALS[$variable];
	} else {
		echo "Sin dato cargado: " . $variable;
	}
}

function mostrarClientes() {
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$sql = "SELECT * FROM usuarios";

	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$username = $row["username"];
			printf ("%s %s %s %s %s", "</td></tr><tr><td>" . $row["username"], "</td><td>" . $row["nombre"], "</td><td>" . $row["telefono"],  "</td><td>" . $row["email"], "</td><td><a href='editarcliente.php?username=$username'><button>EDITAR</button></a>");
		}
		mysqli_free_result($result);
	}
	mysqli_close($con);
}


function mostrarArticulos() {
$total_articulos = 13;
$num_filas = 5;
$orden ='precio';
if (isset($_GET["desplazamiento"]))
	$desplazamiento = $_GET["desplazamiento"];
else $desplazamiento = 0;
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$sql = "SELECT * FROM articulos ORDER BY $orden LIMIT $desplazamiento, $num_filas";

	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
			printf ("%s %s %s %s", "</td></tr><tr><td>" . $row["nombre"], "</td><td>" . $row["descripcion"], "</td><td>" . $row["precio"],  "€</td><td>" . $row["oferta"]);
		}
		mysqli_free_result($result);
	}
	mysqli_close($con);
}


?>


