<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex11</title>
</head>
<body>
    <h1> Piràmide </h1>

    <form method="POST">

        <label>Caràcter:</label>
        <input type="text" name="caracter" maxlength="1" value="<?php echo isset($_POST["caracter"]) ? $_POST["caracter"] : ""; ?>" >

        <br><br>

        <label>Número de files:</label>
        <input type="number" name="numFiles" value="<?php echo isset($_POST["numFiles"]) ? $_POST["numFiles"] : ""; ?>" >

        <br><br>

        <input type="submit" value="Generar">

    </form>

<?php

    /*
        A partir de l'exercici anterior, fent servir el mètode POST,
        fem un formulari on l'usuari pot indicar el caràcter
        que vol mostrar i el nombre de files de la piràmide.
    */

    // Comprovem que s'hagin enviat les dues dades del formulari
    if (isset($_POST["caracter"]) && isset($_POST["numFiles"])) {

        // Espai buit en HTML
        $espai = "&nbsp;";

        // Agafem el caràcter introduït per l'usuari
        // i li afegim un espai al davant
        $caracter = $espai . $_POST["caracter"];

        // Agafem el nombre de files introduït per l'usuari
        $numFiles = $_POST["numFiles"];

        // Aquest bucle controla cada fila de la piràmide
        for ($i = 1; $i <= $numFiles; $i++) {

            // Espais abans dels caràcters
            /*
            Fila 1 → numFiles - 1 espais
            Fila 2 → numFiles - 2 espais
            Fila 3 → numFiles - 3 espais
            ...
            Última fila → 0 espais
            */
            for ($pos = $i; $pos < $numFiles; $pos++) {
                echo $espai;
            }

            // Caràcters de cada fila
            /*
            El nombre de repeticions depèn del valor de $i.

            Fila 1 → 1 caràcter
            Fila 2 → 2 caràcters
            Fila 3 → 3 caràcters
            ...
            */
            for ($pos = 1; $pos <= $i; $pos++) {
                echo $caracter;
            }

            // Salt de línia per començar la fila següent
            echo "<br>";
        }
    }

?>

    <h2> Codi font </h2>

<?php
    show_source("ej11.php");
?>

</body>
</html>