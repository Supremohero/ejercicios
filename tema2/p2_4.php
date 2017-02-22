<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 1 - PHP</title>
</head>

<!--
Práctica 2.4. Amplía el programa anterior con más datos personales. 
 -->

<body>
<?php
//$nombre = $_GET['nombre'];
/* había pensado en usar algo para que pida los datos ($_GET),
pero como es algo más avanzado y no se conseguiría el resultado esperado
(tener los datos del ejercicio ya puestos y mostrarlo) decidí no usarlo,
en principio lo busqué porque me parecía demasiado fácil el ejercicio,
espero que no falte nada.
*/
    $nombre = "Daniel";
    $apellido1 = "Muñoz";
    $apellido2 = "Chacón";
    $edad = 20;
    $domicilio = "c/Londres 92";
    $cpos = "03204";
    $tlf = "966565656";
    $prof = "Programador";
    
    
    
    echo "Nombre: ";
    echo $nombre;
    echo "<br>";
    
    echo "Apellidos: ";
    echo $apellido1;
    echo " ";
    echo $apellido2;
    echo "<br>";

    echo "Edad: ";
    echo $edad;
    echo " años";
    echo "<br>";

    echo "Domicilio: ";
    echo $domicilio;
    echo "<br>";

    echo "Codigo Postal: ";
    echo $cpos;
    echo "<br>";

    echo "Telefono: ";
    echo $tlf;
    echo "<br>";

    echo "Profesión: ";
    echo $prof;
    echo "<br>";

?>



</body>
</html>
