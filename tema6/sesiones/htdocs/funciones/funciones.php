<?php
function conectar () {
	// local
	$conectar = @mysql_connect("localhost", "root", "") or die("No se pudo conectar: " . mysql_error());
	mysql_select_db("app");
	return;

}

error_reporting(E_ALL);

function popup() {
	// pop up
	echo "<div data-role='popup' id='agitar' data-theme='a' data-overlay-theme='b' class='ui-content' style='max-width:340px; padding-bottom:2em;'>
	    <h3>Editar producto</h3>
	<p>No creo que vaya a usar el pop-up</p>

	    <a href='index.html' data-rel='back' class='ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini'>Editar</a>
	    <a href='index.html' data-rel='back' class='ui-shadow ui-btn ui-corner-all ui-btn-inline ui-mini'>Cancel</a>
		
	</div>";
}
function portada () {
	$ssql = "select * from productos order by id_post desc limit 200";
	$result = mysql_query($ssql);
	while ($registro = mysql_fetch_array($result))
	{
		$titulo=$registro["titulo"];	
		$pvd=$registro["pvd"];
		$pvp=$registro["pvp"];
		$modulo=$registro["modulo"];
		$estanteria=$registro["estanteria"];
		$cajon=$registro["cajon"];
		$id_post=$registro["id_post"];
		$stock=$registro["stock"];
		$fecha=$registro["tiempo"];
			
		echo "<li>";
		// echo "<a href='post.php?id_post=$id_post'><img src='$imagen'>";
		echo "<a href='post.php?id_post=$id_post'>";
		echo "<h2>$titulo</h2>";
		
		echo "<p>Modulo: $modulo</p>";
		echo "<p>Estantería: $estanteria</p>";
		echo "<p>Cajon: $cajon</p>";
		echo "<p class='ui-li-aside'>Ult. Actualización: $fecha</p>";
		echo "<span class='ui-li-count'>$stock uds</span>";
		
		
		//echo "$id_post";
		//echo "$votos";
		
		// echo "<a href='/editar.php?id_post=$id_post' data-rel='popup' data-position-to='window' data-transition='pop'>Agitar</a></li>";
		echo "<a href='/editar.php?id_post=$id_post'>Editar</a></li>";
	}
	popup();
	return $registro;
}
function modulouno () {
	$ssql = "select * from productos where modulo = 1 order by stock desc limit 20";
	$result = mysql_query($ssql);
	while ($registro = mysql_fetch_array($result))
	{
		//elimino caracteres extraños en campos susceptibles de tenerlos
		$titulo=$registro["titulo"];	
		$pvd=$registro["pvd"];
		$pvp=$registro["pvp"];
		$modulo=$registro["modulo"];
		$estanteria=$registro["estanteria"];
		$cajon=$registro["cajon"];
		$id_post=$registro["id_post"];
		$stock=$registro["stock"];
		$fecha=$registro["tiempo"];
			
		echo "<li>";
		// echo "<a href='post.php?id_post=$id_post'><img src='$imagen'>";
		echo "<a href='post.php?id_post=$id_post'>";
		echo "<h2>$titulo</h2>";
		
		echo "<p>Modulo: $modulo</p>";
		echo "<p>Estantería: $estanteria</p>";
		echo "<p>Cajon: $cajon</p>";
		echo "<p class='ui-li-aside'>Ult. Actualización: $fecha</p>";
		echo "<span class='ui-li-count'>$stock uds</span>";
		
		
		//echo "$id_post";
		//echo "$votos";
		
		//echo "<a href='/editar.php?id_post=$id_post' data-rel='popup' data-position-to='window' data-transition='pop'>Agitar</a></li>";

		echo "<a href='/editar.php?id_post=$id_post'>Editar</a></li>";
		
	}
	popup();
	return $registro;
}

function modulodos () {
	$ssql = "select * from productos where modulo = 2 order by stock desc limit 20";
	$result = mysql_query($ssql);
	while ($registro = mysql_fetch_array($result))
	{
		//elimino caracteres extraños en campos susceptibles de tenerlos
		$titulo=$registro["titulo"];	
		$pvd=$registro["pvd"];
		$pvp=$registro["pvp"];
		$modulo=$registro["modulo"];
		$estanteria=$registro["estanteria"];
		$cajon=$registro["cajon"];
		$id_post=$registro["id_post"];
		$stock=$registro["stock"];
		$fecha=$registro["tiempo"];
			
		echo "<li>";
		// echo "<a href='post.php?id_post=$id_post'><img src='$imagen'>";
		echo "<a href='post.php?id_post=$id_post'>";
		echo "<h2>$titulo</h2>";
		
		echo "<p>Modulo: $modulo</p>";
		echo "<p>Estantería: $estanteria</p>";
		echo "<p>Cajon: $cajon</p>";
		echo "<p class='ui-li-aside'>Ult. Actualización: $fecha</p>";
		echo "<span class='ui-li-count'>$stock uds</span>";
		
		
		//echo "$id_post";
		//echo "$votos";
		
		echo "<a href='#agitar' data-rel='popup' data-position-to='window' data-transition='pop'>Agitar</a></li>";
	}
	popup();
	return $registro;
}

function modulotres () {
	$ssql = "select * from productos where modulo = 3 order by stock desc limit 20";
	$result = mysql_query($ssql);
	while ($registro = mysql_fetch_array($result))
	{
		//elimino caracteres extraños en campos susceptibles de tenerlos
		$titulo=$registro["titulo"];	
		$pvd=$registro["pvd"];
		$pvp=$registro["pvp"];
		$modulo=$registro["modulo"];
		$estanteria=$registro["estanteria"];
		$cajon=$registro["cajon"];
		$id_post=$registro["id_post"];
		$stock=$registro["stock"];
		$fecha=$registro["tiempo"];
			
		echo "<li>";
		// echo "<a href='post.php?id_post=$id_post'><img src='$imagen'>";
		echo "<a href='post.php?id_post=$id_post'>";
		echo "<h2>$titulo</h2>";
		
		echo "<p>Modulo: $modulo</p>";
		echo "<p>Estantería: $estanteria</p>";
		echo "<p>Cajon: $cajon</p>";
		echo "<p class='ui-li-aside'>Ult. Actualización: $fecha</p>";
		echo "<span class='ui-li-count'>$stock uds</span>";
		
		
		//echo "$id_post";
		//echo "$votos";
		
		echo "<a href='#agitar' data-rel='popup' data-position-to='window' data-transition='pop'>Agitar</a></li>";
	}
	popup();
	return $registro;
}

function modulocuatro () {
	$ssql = "select * from productos where modulo = 4 order by stock desc limit 20";
	$result = mysql_query($ssql);
	while ($registro = mysql_fetch_array($result))
	{
		//elimino caracteres extraños en campos susceptibles de tenerlos
		$titulo=$registro["titulo"];	
		$pvd=$registro["pvd"];
		$pvp=$registro["pvp"];
		$modulo=$registro["modulo"];
		$estanteria=$registro["estanteria"];
		$cajon=$registro["cajon"];
		$id_post=$registro["id_post"];
		$stock=$registro["stock"];
		$fecha=$registro["tiempo"];
			
		echo "<li>";
		// echo "<a href='post.php?id_post=$id_post'><img src='$imagen'>";
		echo "<a href='post.php?id_post=$id_post'>";
		echo "<h2>$titulo</h2>";
		
		echo "<p>Modulo: $modulo</p>";
		echo "<p>Estantería: $estanteria</p>";
		echo "<p>Cajon: $cajon</p>";
		echo "<p class='ui-li-aside'>Ult. Actualización: $fecha</p>";
		echo "<span class='ui-li-count'>$stock uds</span>";
		
		
		//echo "$id_post";
		//echo "$votos";
		
		echo "<a href='#agitar' data-rel='popup' data-position-to='window' data-transition='pop'>Agitar</a></li>";
	}
	popup();
	return $registro;
}
?>
