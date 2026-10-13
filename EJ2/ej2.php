<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex02</title>
</head>
<body>
    <h1> gettype </h1>
<?php
    /*
         Escriu un programa que donades tres 
         variables amb un valor diferent cadascuna les mostri per pantalla i digui el tipus (gettype)
    */

    // Assignació i declaració de valors a les variables
    $nom = "Mario Daniel";
    $edat = 39;
    $altura = 1.69;

    echo $nom . " - " . gettype($nom) . "<br>\n";
    echo $edat . " - " . gettype($edat) . "<br>\n";
    echo $altura . " - " . gettype($altura) . "<br>\n";

?>
   <h2> Codi font </h2>
<?php
     show_source("ej2.php");
?>
</body>
</html>