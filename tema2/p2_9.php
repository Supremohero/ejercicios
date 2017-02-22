<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 2.9 - PHP</title>
</head>

<!--
Práctica 2.9
 -->

<body>
<?php

    define("PRECIO_JUDIAS", 3.50);
    define("PRECIO_PATATAS", 0.40);
    define("PRECIO_TOMATES", 1.00);
    define("PRECIO_MANZANAS", 1.20);
    define("PRECIO_UVAS", 2.50);

    $peso_judias = 1.21;
    $coste_judias = PRECIO_JUDIAS * $peso_judias;

    $peso_patatas = 1.73;
    $coste_patatas = PRECIO_PATATAS * $peso_patatas;

    $peso_tomates = 2.08;
    $coste_tomates = PRECIO_TOMATES * $peso_tomates;

    $peso_manzanas = 2.15;
    $coste_manzanas = PRECIO_MANZANAS * $peso_manzanas;

    $peso_uvas = 0.77;
    $coste_uvas = PRECIO_UVAS * $peso_uvas;

    $coste_total = $coste_judias + $coste_patatas + $coste_tomates + $coste_manzanas + $coste_uvas;

    echo "Product - Precio/kg - Peso - Precio";
    echo "<br>";
    echo "Judías - ";
    echo number_format(PRECIO_JUDIAS, 2);
    echo " - ";
    echo number_format($peso_judias, 2);
    echo " - ";
    echo number_format($coste_judias, 2);

    echo "<br>";
    echo "Patatas - ";
    echo number_format(PRECIO_PATATAS, 2);
    echo " - ";
    echo number_format($peso_patatas, 2);
    echo " - ";
    echo number_format($coste_patatas, 2);

    echo "<br>";
    echo "Tomates - ";
    echo number_format(PRECIO_TOMATES, 2);
    echo " - ";
    echo number_format($peso_tomates, 2);
    echo " - ";
    echo number_format($coste_tomates, 2);

    echo "<br>";
    echo "Manzanas - ";
    echo number_format(PRECIO_MANZANAS, 2);
    echo " - ";
    echo number_format($peso_manzanas, 2);
    echo " - ";
    echo number_format($coste_manzanas, 2);

    echo "<br>";
    echo "Uvas - ";
    echo number_format(PRECIO_UVAS, 2);
    echo " - ";
    echo number_format($peso_uvas, 2);
    echo " - ";
    echo number_format($coste_uvas, 2);

    echo "<br>";
    echo "Total: ";
    echo number_format($coste_total, 2);
    echo " euros";
    echo "<br>";
    echo "Gracias por su compra";

    echo "<br>";

    if (PRECIO_JUDIAS > 1.50) {
        echo "judias ";
    }

    if (PRECIO_PATATAS > 1.50) {
        echo "patatas ";
    }

    if (PRECIO_TOMATES > 1.50) {
        echo "tomates ";
    }

    if (PRECIO_MANZANAS > 1.50) {
        echo "manzanas ";
    }

    if (PRECIO_UVAS > 1.50) {
        echo "uvas";
    }
    






?>



</body>
</html>
