
<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex06</title>
</head>
<body>
    <h1> bucle </h1>
<?php
    
    /*
         Donada una base i un exponent enter, calcula la potència amb un bucle
    */
    
    $base = 2;
    $exponent = 3;

    $resultat = $resultatFor = 1;
    $i = 0;

    // bucle while
    while ($i < $exponent) {
        $resultat = $resultat * $base;
        $i++;
    }

    echo $base . " elevat a " . $exponent . " és " . $resultat . "</br>";

    // bucle for 
    for ($i = 0; $i < $exponent; $i++) {
        $resultatFor = $resultatFor * $base;
    }

    echo $base . " elevat a " . $exponent . " és " . $resultatFor . "</br>";
?>
   <h2> Codi font </h2>
<?php
     show_source("ej6.php");
?>
</body>
</html>