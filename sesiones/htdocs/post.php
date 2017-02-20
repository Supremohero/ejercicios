<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title><?=$titulo;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="js/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
<script>   
$(function(){
 $("#btn_restar").click(function(){
 var url = "restar.php"; // El script a dónde se realizará la petición.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
               $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
           }
         });

    return false; // Evitar ejecutar el submit del formulario.
 });
});
</script>

<?php
require ("funciones/funciones.php");
conectar();
// saco el contenido de bbdd
$id_post = $_GET['id_post'];
$ssql = "select * from productos where id_post='$id_post'";
$result = mysql_query($ssql);
$registro = mysql_fetch_array($result);
	
		$titulo=$registro["titulo"];	
		$pvd=$registro["pvd"];
		$pvp=$registro["pvp"];
		$modulo=$registro["modulo"];
		$estanteria=$registro["estanteria"];
		$cajon=$registro["cajon"];

		$id_post=$registro["id_post"];
		$stock=$registro["stock"];
		$fecha=$registro["tiempo"];

?>
</head> 
<body>
<form method="post" id="formulario_restar" enctype="multipart/form-data">
<!-- POST -->
<div data-role="page" id="post">
	<div data-role="header" data-position="fixed" class="ui-header" data-theme="b">
        <h1 class="ui-title"><?=$titulo;?></h1>
    </div>

	<div role="main" class="ui-content">
    	<div class="ui-body ui-body-a ui-corner-all">
        	<!-- img src="images/post/demo.jpg" style="float:left; width:35%; margin-right:5px;"-->
        	<h3><?=$titulo;?></h3>
	      <p>Cantidad en stock: <?=$stock;?></p>
	      <div id="respuesta"></div>
	      <p>PVP: <?=$pvp;?></p>
	      <p>PVD: <?=$pvd;?></p>
	      <p>Modulo: <?=$modulo;?></p>
	      <p>Estantería: <?=$estanteria;?></p>
	      <p>Cajón: <?=$cajon;?></p>
        </div>
         <input type="text" name="titulo" id="titulo" value="<?=$titulo?>"  />
			<input type="hidden" name="stock" id="stock" value="<?=$stock?>"  />
	</div>

	<div data-role="footer" data-position="fixed" class="ui-footer">
    	<div data-role="navbar" data-iconpos="bottom">
        	<ul>
            <li data-icon="back"><a href="#" data-rel="back" data-icon="back">Volver</a></li>
            <li><a href="editar.php?id_post=<?=$id_post;?>" data-icon="edit" data-iconpos="top" data-ajax="false" data-theme="a">Editar</a></li>
            <li><input type="button" id="btn_restar" value="restar" data-icon="minus" data-ajax="false" data-iconpos="bottom"></li>
        </ul>
        </div>
	</div>
</div>
</form>
</body>
</html>