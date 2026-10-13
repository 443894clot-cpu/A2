
<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex05</title>
</head>
<body>
    <h1> while </h1>
<?php
    /*
         Suma els 10 primers números naturals emprant un while
    */
    
    $nom = 1;
    $suma = 0;

    while ($nom <= 10) {
        $suma = $suma + $nom;
        $nom++;
    }

    echo "La suma és: " . $suma . "<br>";

?>
   <h2> Codi font </h2>
<?php
     show_source("ej5.php");
?>
</body>
</html>