
<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex04</title>
</head>
<body>
    <h1> Date </h1>
<?php
    /*
         Obté quin dia de la setmana és avui amb date("D") i mostra-ho en català emprant un switch
    */
    
    $dia = date("D");
    echo $dia." = ";
    switch ($dia) {
        case "Mon":
            echo "Dilluns";
            break;
        case "Tue":
            echo "Dimarts";
            break;
        case "Wed":
            echo "Dimecres";
            break;
        case "Thu":
            echo "Dijous";
            break;
        case "Fri":
            echo "Divendres";
            break;
        case "Sat":
            echo "Dissabte";
            break;
        case "Sun":
            echo "Diumenge";
            break;
    }

?>
   <h2> Codi font </h2>
<?php
     show_source("ej4.php");
?>
</body>
</html>