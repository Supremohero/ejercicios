
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
 $("#btn_borrar").click(function(){
 var url = "borro.php"; // El script a dónde se realizará la petición.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#formulario_editar").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
               $("#respuesta_borrar").html(data); // Mostrar la respuestas del script PHP.
           }
         });

    return false; // Evitar ejecutar el submit del formulario.
 });
});
</script>
</head> 
<body>

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
		$tiempo=$registro["tiempo"];
	
error_reporting(E_ALL);
?>

<form method="post" id="formulario_editar" enctype="multipart/form-data">
<!-- PAGINA Publicar -->
<div data-role="page" id="page">
	<div class="ui-header" data-role="header" data-theme="b">
				<h1>Borrar <?=$titulo?></h1>
	</div>
    <!--div data-role="navbar" data-theme="b">
        <ul>
            <li><a href="#" data-icon="video" data-theme="b">Grabar video</a></li>
            <li><a href="#" data-icon="camera" data-theme="b">Tomar foto</a></li>
        </ul>
    </div-->
	<div data-role="content" role="main" class="ui-content">
        <div class="ui-body ui-body-a ui-corner-all">
          <div data-role="fieldcontain">
          
          	<h4>Borrar <?=$titulo?></h4>
          	<p><div id="respuesta_borrar">Atención, ¿estás seguro que quieres borrar <b><?=$titulo?></b></div>
            <input type="hidden" name="id_post" id="id_post" value="<?=$id_post?>"  />


        </div>
<br><br><br>
    </div>
    <div data-role="footer" class="ui-footer-fixed">
    	<div data-role="navbar" data-iconpos="bottom">
        	<ul>
            <li data-icon="back"><a href="/" data-ajax="false" data-icon="back">Inicio</a></li>
            <li><input type="button" id="btn_borrar" value="borrar" data-icon="action" data-ajax="false" data-iconpos="top"></li>
        </ul>
        </div>
	</div>
</div>
</div>
</form>
</body></html>