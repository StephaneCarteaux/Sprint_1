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
            <form action="exercici_1_read_form.php" method="post">
                <div class="row">
                    <div class="label"><label for="name">Nombre:</label></div>
                    <div class="input"><input type="text" id="nombre" name="nombre"></div>
                </div>
                <div class="row">
                    <div class="label"><label for="pais">País:</label></div>
                    <div class="input"><input type="text" id="pais" name="pais"></div>
                </div>
                <div class="row">
                    <div class="label"><label for="ciudad">Ciudad:</label></div>
                    <div class="input"><input type="text" id="ciudad" name="ciudad"></div>
                </div>
                <div class="row">
                    <div class="label"><label for="edad">Edad:</label></div>
                    <div class="input"><input type="text" id="edad" name="edad"></div>
                </div>
                <div class="row">
                    <div class="label"></div>
                    <div class="submit"><input type="submit" value="Enviar"></div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>