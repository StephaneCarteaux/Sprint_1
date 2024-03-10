<!Doctype html>

<html lang="es">

<head>
    <title>Cartelera</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Author" content="Stef">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php

    include 'clases.php';
    include 'datos.php';

    echo "<div class='container'>";

    echo "<h1>Cartelera</h1>";

    mostarDatosPeliculas($cinema);

    function mostarDatosPeliculas($cinema)
    {

        for ($i = 1; $i <= Cinema::$id; $i++) {
            echo "<div class='header'>";
            echo "<div class='cinema'>" . $cinema[$i]->nombre . "</div>";
            echo "<div class='poblacion'>" . "(" . $cinema[$i]->poblacion . ")" . "</div>";
            echo "</div>";
            foreach ($cinema[$i]->peliculas as $pelicula) {
                echo "<div class='info'>";
                echo "<div class='nombrePelicula'>" . $pelicula->nombre . "</div>";
                echo "<div class='duracion'>" . $pelicula->duracion . " min." . "</div>";
                echo "<div class='director'>" . $pelicula->director . "</div>";
                echo "</div>";
            }
            mostarPeliConMayorDuracion($cinema[$i]);
        }
    }

    function mostarPeliConMayorDuracion($cinema)
    {
        $maxDuracion = 0;
        $maxDuracionNombre = "";
        foreach ($cinema->peliculas as $pelicula) {
            if ($pelicula->duracion > $maxDuracion) {
                $maxDuracion = $pelicula->duracion;
                $maxDuracionNombre = $pelicula->nombre;
            }
        }
        echo "<div class='maxDuracion'>" . $maxDuracionNombre . " es la pelicula más larga." . "</div>";
    }
    
    buscarPorDirector($cinema, 'Cristopher Nolan');

    function buscarPorDirector($cinema, $director)
    {
        echo "<div class='buscarPorDirector'>";
        echo "<div class='director'>Busqueda por director: Cristopher Nolan</div>";

        for ($i = 1; $i <= Cinema::$id; $i++) {
            foreach ($cinema[$i]->peliculas as $pelicula) {
                if ($pelicula->director == $director) {
                        echo "Puedes ver " . $pelicula->nombre . " en: ".$cinema[$i]->nombre . " (" . $cinema[$i]->poblacion . ") ";
                        echo "<br>";
                }
            }
        }
    }
    echo "</div>";
    ?>

</body>

</html>