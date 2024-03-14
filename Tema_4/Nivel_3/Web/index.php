<?php
require_once 'datos.php';
?>

<!Doctype html>
<html lang="es">

<head>
    <title>Cartelera</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Author" content="Stef">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class='container'>
        <h1>Cartelera</h1>

        <?php for ($i = 1; $i <= Cinema::$id; $i++) { ?>
            <div class='header'>
                <div class='cinema'><?php echo $cinema[$i]->getNombre() ?></div>
                <div class='poblacion'><?php echo $cinema[$i]->getPoblacion() ?></div>
            </div>
            <?php foreach ($cinema[$i]->getPeliculas() as $pelicula) { ?>
                <div class='info'>
                    <div class='nombrePelicula'><?php echo $pelicula->getNombre() ?></div>
                    <div class='duracion'><?php echo $pelicula->getDuracion() ?> min.</div>
                    <div class='director'><?php echo $pelicula->getDirector() ?></div>
                </div>
        <?php
            }
        }
        ?>

        <div class='maxDuracion'>
            <?php echo $pelicula->mostarPeliConMayorDuracion($cinema) ?>
        </div>

        <div class='buscarPorDirector'>
            <div class='director'>Busqueda por director: Cristopher Nolan</div>
            <?php $pelicula->buscarPorDirector($cinema, 'Cristopher Nolan') ?>
        </div>

</body>
</html>