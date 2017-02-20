<?php
define ("HOSTNAME","localhost");
define ("DATABASE","curso_php");
define ("USER_DB","root");
define ("PASSWORD_DB","");

function mostrarClientes() {
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$sql = "SELECT * FROM clientes";

	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$dni = $row["DNI"];
			printf ("%s %s %s %s %s %s %s %s %s", "</td></tr><tr><td>" . $row["DNI"], "</td><td>" . $row["nombre"], "</td><td>" . $row["direccion"],  "</td><td>" . $row["localidad"], "</td><td>" .  $row["provincia"],  "</td><td>" . $row["telefono"], "</td><td>" .  $row["email"], "</td><td><a href='editarcliente.php?dni=$dni'><button>EDITAR</button></a>", "</td><td><a href='borrarcliente.php?dni=$dni'><button>BORRAR</button></a>");
		}
		mysqli_free_result($result);
	}
	mysqli_close($con);
}



?>
