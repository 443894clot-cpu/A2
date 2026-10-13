<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex08</title>
</head>
<body>
    <h1> Vector </h1>

<?php

    /*
        Donat un vector (array) mostra en una taula
        els índex i els valors
    */

    $vector[0] = "ASIX2";
    $vector[1] = "Escola del Clot";
    $vector[2] = "v2.1";
    $vector[3] = "3.14159";
    $vector[4] = null;
    $vector[5] = 2017;

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Índex</th>";
    echo "<th>Valor</th>";
    echo "</tr>";

    foreach ($vector as $index => $valor) {

        echo "<tr>";
        echo "<td>" . $index . "</td>";
        echo "<td>" . $valor . "</td>";
        echo "</tr>";

    }

    echo "</table>";

?>

    <h2> Codi font </h2>

<?php
    show_source("ej8.php");
?>

</body>
</html>