<?php
include("funciones.php");
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tema 5</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div id='contenedor'>
 <div id='header'>
 </div>
 <div id='contenido'>
  <h1>Clientes de la base de datos</h1>
<?php
echo "<table>
<tr id='titulo'>
<td><b>DNI</b></td>
<td><b>Nombre</b></td>
<td><b>Dirección</b></td>
<td><b>Localidad</b></td>
<td><b>Provincia</b></td>
<td><b>Teléfono</b></td>
<td><b>e-mail</b></td>
<td id='editar'><b>Editar</b></td>
<td id='borrar'><b>Borrar</b>";

mostrarClientes();

echo "</td></tr></table><br>";
echo "<a href='clientenuevo.php'><button>Nuevo cliente</button></a>";

?>
 </div>
</div>
</body>
</html>
