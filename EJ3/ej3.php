<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex03</title>
</head>
<body>
    <h1> rand </h1>
<?php
    /*
         Sabent que la funció rand ens retorna un valor aleatori entre un ventall de dos enters: 
         Genera 3 números i mostra per pantalla el tres números i la frase "El més gran és " + número més gran
    */
    
    // Generem els 3 números
    $numeros = [
        "n1" => rand(1, 20),
        "n2" => rand(1, 20),
        "n3" => rand(1, 20)
    ];

    // Mostrem els números
    foreach ($numeros as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

    // Busquem el més gran
    $mesGran = 0;

    foreach ($numeros as $key => $value) {
        if ($value > $mesGran) {
            $mesGran = $value;
        }
    }

    echo "El més gran és " . $mesGran . "<br>";

    //sense foreach
    $preGran = ($numeros["n1"] > $numeros["n2"]) ? $numeros["n1"] : $numeros["n2"] ;
    $mesGran = ($preGran > $numeros["n3"]) ? $preGran : $numeros["n3"] ;
        
    echo "El més gran és " . $mesGran . "<br>";
?>
   <h2> Codi font </h2>
<?php
     show_source("ej3.php");
?>
</body>
</html>