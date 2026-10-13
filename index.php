<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercicis PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 40px auto;
        }

        ul {
            line-height: 1.8;
        }

        a {
            text-decoration: none;
            color: #0066cc;
        }

        a:hover {
            text-decoration: underline;
        }

        .carpeta {
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Exercicis SM7 - MAPEIA</h1>

<?php

function mostrarCarpeta($ruta, $url = '')
{
    $archivos = scandir($ruta);

    // Orden natural: EJ1, EJ2, EJ3... EJ10
    natsort($archivos);

    echo "<ul>";

    foreach ($archivos as $archivo) {

        // Ignorar archivos y carpetas ocultas (.git, .env, etc.)
        if (str_starts_with($archivo, ".")) {
            continue;
        }

        // Ignorar el propio index.php
        if ($archivo === "index.php") {
            continue;
        }

        // Ignorar cualquier cosa que tenga .old
        if (str_contains($archivo, ".old")) {
            continue;
        }

        $rutaCompleta = $ruta . "/" . $archivo;
        $urlCompleta = $url . "/" . $archivo;

        if (is_dir($rutaCompleta)) {

            echo "<li class='carpeta'>📁 $archivo</li>";

            mostrarCarpeta($rutaCompleta, $urlCompleta);

        } else {

            echo "<li>";
            echo "📄 <a href='" . htmlspecialchars($urlCompleta) . "'>";
            echo htmlspecialchars($archivo);
            echo "</a>";
            echo "</li>";
        }
    }

    echo "</ul>";
}

mostrarCarpeta(__DIR__);

?>

</body>
</html>