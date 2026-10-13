<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex07</title>
</head>
<body>
    <h1> Bucle for </h1>

<?php

    /*
        Mostra una taula amb els números d'1 al 100 de 10 en 10
        (etiquetes HTML table, tr i td)
    */

    echo "<table border='1'>";

    for ($i = 1; $i <= 100; $i++) {

        // Cada 10 números empezamos una fila
        if (($i - 1) % 10 == 0) {
            echo "<tr>";
        }

        echo "<td>" . $i . "</td>";

        // Cada 10 números cerramos la fila
        if ($i % 10 == 0) {
            echo "</tr>";
        }
    }

    echo "</table>";

?>

    <h2> Codi font </h2>

<?php
    show_source("ej7.php");
?>

</body>
</html>