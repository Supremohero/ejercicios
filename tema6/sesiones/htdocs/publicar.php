<!DOCTYPE html> 
<html><head>
<meta charset="utf-8">
<title>Inventario</title>
<link rel="stylesheet" href="js/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
<?php
require ("funciones/funciones.php");
conectar();

ini_set('display_errors', 'on');
?>
<script>   
$(function(){
 $("#btn_enviar").click(function(){
 var url = "insertar.php"; // El script a dónde se realizará la petición.
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
</head> 
<body>

<form method="post" id="formulario" enctype="multipart/form-data">
<!-- PAGINA Publicar -->
<div data-role="page" id="page">
	<div class="ui-header" data-role="header" data-theme="b">
				<h1>Publicar</h1>
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
          <div id="respuesta"></div>
          	<h4>Nombre del producto:</h4>
          	<p>Para un correcto funcionamiento del buscador escribe un nombre estructurado por <b>Tipo/Marca/Modelo, ej.: Pantalla Apple iPhone 7</b>
            <input type="text" name="titulo" id="titulo" value=""  />

          <h4>PVD (sin IVA):</h4>
            <input type="text" name="pvd" id="pvd" value=""  />

          <h4>PVP (sin IVA):</h4>
            <input type="text" name="pvp" id="pvp" value=""  />
          </div>
          
          <label for="stock">Cantidad en stock:</label>
    		<input name="stock" id="stock" data-highlight="true" min="0" max="100" value="50" type="range">
    		
            <fieldset data-role="controlgroup">
            <legend>Módulo:</legend>
            <input type="radio" name="modulo" id="mod-1" value="1" checked="checked">
            <label for="mod-1">1</label>
            <input type="radio" name="modulo" id="mod-2" value="2">
            <label for="mod-2">2</label>
            <input type="radio" name="modulo" id="mod-3" value="3">
            <label for="mod-3">3</label>
            <input type="radio" name="modulo" id="mod-4" value="4">
            <label for="mod-4">4</label>
            </fieldset>
            
            <fieldset data-role="controlgroup">
            <legend>Estantería:</legend>
            <input type="radio" name="estanteria" id="est-1" value="1" checked="checked">
            <label for="est-1">1</label>
            <input type="radio" name="estanteria" id="est-2" value="2">
            <label for="est-2">2</label>
            <input type="radio" name="estanteria" id="est-3" value="3">
            <label for="est-3">3</label>
            <input type="radio" name="estanteria" id="est-4" value="4">
            <label for="est-4">4</label>
            </fieldset>
            
            <fieldset data-role="controlgroup">
            <legend>Cajón:</legend>
            <input type="radio" name="cajon" id="cajon-1" value="1" checked="checked">
            <label for="cajon-1">1</label>
            <input type="radio" name="cajon" id="cajon-2" value="2">
            <label for="cajon-2">2</label>
            <input type="radio" name="cajon" id="cajon-3" value="3">
            <label for="cajon-3">3</label>
            <input type="radio" name="cajon" id="cajon-4" value="4">
            <label for="cajon-4">4</label>
            </fieldset>
          <br><br><br>
        </div>
<br><br><br>
    </div>
    <div data-role="footer" class="ui-footer-fixed">
    	<div data-role="navbar" data-iconpos="bottom">
        	<ul>
            <li data-icon="back"><a href="#" data-rel="back" data-ajax="false" data-icon="back">Atras</a></li>
            <!-- li><a href="#" data-icon="grid">Subir imagen</a></li -->
            <li><input type="button" id="btn_enviar" value="publicar" data-icon="action" data-ajax="false" data-iconpos="top"></li>
        </ul>
        </div>
	</div>
</div>
</div>
</form>
</body></html>