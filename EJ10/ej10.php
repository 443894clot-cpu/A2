<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex10</title>
</head>
<body>
    <h1> Piràmide </h1>

<?php

    /*
        Fent servir el mètode GET i dos for niats
        per a que surti una forma com aquesta.
    */

    $espai = "&nbsp;";
    $caracter = $espai . "^";
    $numFiles = 10;

    //para manejar cada fila
    for ($i = 1; $i <= $numFiles; $i++) {

        // Espais abans dels caràcters
        /*
        Fila 1 → 9 espacios
        Fila 2 → 8 espacios
        Fila 3 → 7 espacios
        Fila 10 → 0 espacios
        */
        for ($pos = $i; $pos < $numFiles; $pos++) {
            echo $espai;
        }

        // Caràcters de la fila
        /* El numero de repeticiones va a depender del valor de i empezamos a contar en 1 pero cada fila aumenta en 1 el caracter */
        for ($pos = 1; $pos <= $i; $pos++) {
            echo $caracter;
        }

        echo "<br>";
    }

?>

    <h2> Codi font </h2>

<?php
    show_source("ej10.php");
?>

</body>
</html>