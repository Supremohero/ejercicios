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
	$acentos = $con->query("SET NAMES 'utf8'");
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
	$num_filas = 5;
	global $orden;
	if (isset($_GET["desplazamiento"]))
		$desplazamiento = $_GET["desplazamiento"];
	else $desplazamiento = 0;
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$query1 = mysqli_query($con, "select * from articulos");
	$total_articulos = mysqli_num_rows($query1);
	$sql = "SELECT * FROM articulos ORDER BY $orden LIMIT $desplazamiento, $num_filas";
	$acentos = $con->query("SET NAMES 'utf8'");
	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
				// seleccionar las categorias de cada articulo
			$sql2 = "SELECT nombre FROM categorias WHERE articulo = '$id'";
			$acentos = $con->query("SET NAMES 'utf8'");

			printf ("%s %s %s %s %s", "</td></tr><tr><td><a href='articulos/$id.png'><img src='articulos/" . $row["id"] . ".png' width='50px' height='50px'></a>", "</td><td>". $row["nombre"], "</td><td>" . $row["descripcion"], "</td><td>" . $row["precio"],  "€</td><td><b>" . $row["oferta"] . "</b></td><td>");
			//imprimimos las categorias
			if ($result2 = mysqli_query($con, $sql2)) {
				while ($row = mysqli_fetch_assoc($result2)) {
					printf ("%s", "<a href='categorias.php?categoria=" . $row["nombre"] . "'>" . $row["nombre"] . "</a> ");
				}
			}
		}
		mysqli_free_result($result);
	}
	mysqli_close($con);
	echo "</td></tr></table><br>";
	//desplazamiento
	$prevpag = $desplazamiento / 5;
	$currpag = $desplazamiento / 5 + 1;
	$nextpag = $desplazamiento / 5 + 2;
	if ($desplazamiento > 0) {
		$prev = $desplazamiento - $num_filas;
		$url = $_SERVER["PHP_SELF"] . "?orden=$orden&desplazamiento=$prev";
		echo "<a href='$url'>Página $prevpag</a>&nbsp;&nbsp;&nbsp;";
	} else {
		echo "Página 1&nbsp;&nbsp;&nbsp;";
	}

	if ($total_articulos > ($desplazamiento + $num_filas)) {
		$prox = $desplazamiento + $num_filas;
		$url = $_SERVER["PHP_SELF"] . "?orden=$orden&desplazamiento=$prox";
		echo "<a href='$url'>Página $nextpag</a>";
	} else {
		echo "Página $currpag";
	}
}

function mostrarCompras() {
	$num_filas = 5;
	$orden ='id';
	if (isset($_GET["desplazamiento"]))
		$desplazamiento = $_GET["desplazamiento"];
	else $desplazamiento = 0;
	$cliente = $_SESSION['login_user'];
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$query1 = mysqli_query($con, "SELECT * FROM pedidos WHERE cliente = '$cliente'");
	$total_articulos = mysqli_num_rows($query1);
	$sql = "SELECT * FROM pedidos WHERE cliente = '$cliente' ORDER BY $orden LIMIT $desplazamiento, $num_filas";
	$acentos = $con->query("SET NAMES 'utf8'");
	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$username = $row["cliente"];
			printf ("%s %s %s %s %s", "</td></tr><tr><td>" . $row["id"], "</td><td>" . $row["fecha"], "</td><td>" . $row["contenido"], "</td><td>" . $row["pago"],  "</td><td>" . $row["envio"]);
		}
		mysqli_free_result($result);
	}
	mysqli_close($con);
}


function mostrarPedidos() {
	$num_filas = 5;
	$orden ='id';
	if (isset($_GET["desplazamiento"]))
		$desplazamiento = $_GET["desplazamiento"];
	else $desplazamiento = 0;

	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$query1 = mysqli_query($con, "SELECT * FROM pedidos");
	$total_articulos = mysqli_num_rows($query1);
	$sql = "SELECT * FROM pedidos ORDER BY $orden LIMIT $desplazamiento, $num_filas";
	$acentos = $con->query("SET NAMES 'utf8'");
	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$username = $row["cliente"];
			printf ("%s %s %s %s %s %s ", "</td></tr><tr><td>" . $row["id"], "</td><td>" . $row["cliente"] , "</td><td>" . $row["fecha"] , "</td><td>" . $row["contenido"] , "</td><td>" . $row["pago"],  "</td><td>" . $row["envio"]);		}
		mysqli_free_result($result);
	}
	mysqli_close($con);
}



function mostrarCategorias() {
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$sql = "SELECT DISTINCT nombre FROM categorias";
	$acentos = $con->query("SET NAMES 'utf8'");
	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$nombre = $row["nombre"];
			printf ("%s", "<li><a href='categorias.php?categoria=$nombre'>" . $row["nombre"] . "</a></li>");
		}
		mysqli_free_result($result);
	}
	mysqli_close($con);
}

function mostrarArticulosPorCategoria() {
	$num_filas = 5;
	global $orden;
	global $categoria;
	if (isset($_GET["desplazamiento"]))
		$desplazamiento = $_GET["desplazamiento"];
	else $desplazamiento = 0;
	$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
	$query1 = mysqli_query($con, "select DISTINCT * from categorias WHERE nombre = '$categoria'");
	$total_articulos = mysqli_num_rows($query1);
	$sql = "SELECT DISTINCT articulos.* FROM articulos,categorias WHERE categorias.nombre = '$categoria' && articulos.id = categorias.articulo ORDER BY $orden LIMIT $desplazamiento, $num_filas";
	$acentos = $con->query("SET NAMES 'utf8'");
	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
			printf ("%s %s %s %s %s %s", "</td></tr><tr><td><a href='articulos/$id.png'><img src='articulos/" . $row["id"] . ".png' width='50px' height='50px'></a>", "</td><td>". $row["nombre"], "</td><td>" . $row["descripcion"], "</td><td>" . $row["precio"] . "€",  "</td><td>" . $row["oferta"],  "</td><td><input type='submit' name='" . $row["id"] . "' id='" . $row["id"] . "' value='Comprar'>");
		}
		mysqli_free_result($result);
	}
	mysqli_close($con);
	echo "</td></tr></table><br>";
	//desplazamiento
	$prevpag = $desplazamiento / 5;
	$currpag = $desplazamiento / 5 + 1;
	$nextpag = $desplazamiento / 5 + 2;
	if ($desplazamiento > 0) {
		$prev = $desplazamiento - $num_filas;
		$url = $_SERVER["PHP_SELF"] . "?orden=$orden&desplazamiento=$prev";
		echo "<a href='$url'>Página $prevpag</a>&nbsp;&nbsp;&nbsp;";
	} else {
		echo "Página 1&nbsp;&nbsp;&nbsp;";
	}

	if ($total_articulos > ($desplazamiento + $num_filas)) {
		$prox = $desplazamiento + $num_filas;
		$url = $_SERVER["PHP_SELF"] . "?orden=$orden&desplazamiento=$prox";
		echo "<a href='$url'>Página $nextpag</a>";
	} else {
		echo "Página $currpag";
	}
}


function mostrarCarrito() {
	echo "<br/>";
	$unidadestotal = 0;
	$username = $_SESSION['login_user'];
	if (isset ($_COOKIE["cesta_de_".$username])) {
		echo "<table border='1px,solid,black'> <tr> <td><b>Referencia</b></td> <td><b>Unidades</b></td> </tr>";
		foreach ($_COOKIE["cesta_de_".$username] as $idarticulo => $unidades) {
			$unidadestotal = $unidadestotal + $unidades;
			$con = mysqli_connect(HOSTNAME, USER_DB, PASSWORD_DB, DATABASE);
			$articulo = mysqli_query($con, "select nombre from articulos WHERE id = '$idarticulo'");
			$row = mysqli_fetch_assoc($articulo);
			printf ("%s %s", "<tr> <td>" . $row['nombre'], "</td> <td>" . $unidades . "</td> </tr>");
		}
		echo "<tr><td colspan='2'>Número total de unidades: $unidadestotal &nbsp; </td></tr></table>";
	}else {
		echo "<h1><i>El carrito está vacío</i></h1><br/>";
	}
	echo '<br><a href="realizarcompra.php"><button>Finalizar compra</button></a><br>';
}




?>
