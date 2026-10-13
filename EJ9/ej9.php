<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex09</title>
</head>
<body>
    <h1> Calculadora </h1>

    <form method="GET">
        <label>Número 1:</label>
        <input type="number" name="num1" step="any">

        <br><br>

        <label>Número 2:</label>
        <input type="number" name="num2" step="any">

        <br><br>

        <input type="submit" value="Calcular">
    </form>

<?php

    if (isset($_GET["num1"]) && isset($_GET["num2"])) {

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        echo "<h2>Resultats</h2>";

        echo "Suma: " . ($num1 + $num2) . "<br>";
        echo "Resta: " . ($num1 - $num2) . "<br>";
        echo "Multiplicació: " . ($num1 * $num2) . "<br>";

        if ($num2 != 0) {
            echo "Divisió: " . ($num1 / $num2) . "<br>";
        } else {
            echo "Divisió: No es pot dividir entre 0<br>";
        }
    }

?>

    <h2> Codi font </h2>

<?php
    show_source("ej9.php");
?>

</body>
</html>