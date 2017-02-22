<?php
//de esta manera, la cookie creada expira cuando finaliza la sesión del usuario
setcookie("micookie", "valor de la cookie que estoy creando");

//voy a ampliar la caducidad de la cookie  más allá de la sesión
setcookie("cookie1ano", "valor de la cookie que caduca en un año", time() + (60 * 60 * 24 * 365));

//voy a especificar la ruta donde esta cookie tendrá validez
//todo el dominio
setcookie("cookierutacompleta", "Cookie para todo el dominio", time() + (60 * 60 * 24 * 365), "/");
//Sólo un directorio concreto
setcookie("cookierutadirectorio", "Cookie para todo un directorio concreto", time() + (60 * 60 * 24 * 365), "/ejercicios/tema4");


?>


<br>
<br>
<br>
<a href="ver-cookies.php">Ver la cookie que acabo de crear</a>
