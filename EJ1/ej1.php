<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex01</title>
</head>
<body>
    <h1> El Meu contacte </h1>
<?php
    /*
        Escriu el programa que mostri en php el teu nom i cognoms, i el teu correu electrònic en línies diferents. 
        Feu servir variables per a assignar el vostre nom, cognom i correu electrònic
    */

    // Assignació i declaració de valors a les variables
    $nom = "Mario Daniel";
    $cognoms = "Perez Iannini";
    $correu = "443894.clot@fje.edu";

    echo $nom . " " . $cognoms . "<br>\n";
    echo $correu . "<br>\n";

?>
   <h2> Codi font </h2>
<?php
     show_source("ej1.php");
?>
</body>
</html>