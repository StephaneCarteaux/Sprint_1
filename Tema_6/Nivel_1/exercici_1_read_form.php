<!Doctype html>

<html lang="es">

<head>
    <title>Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Author" content="Stef">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="main_container">
        <div class="form">
            <div class="row">
                <div class="label">Nombre:</div>
                <div class="input"><?php echo $_POST["nombre"] ?></div>
            </div>
            <div class="row">
                <div class="label">País:</div>
                <div class="input"><?php echo $_POST["pais"] ?></div>
            </div>
            <div class="row">
                <div class="label">Ciudad:</div>
                <div class="input"><?php echo $_POST["ciudad"] ?></div>
            </div>
            <div class="row">
                <div class="label">Edad:</div>
                <div class="input"><?php echo $_POST["edad"] ?></div>
            </div>
        </div>
    </div>
</body>

</html>