<?php

    //Tomando la información del POST

    $nombre= $_POST['nombre'];
    $mensaje= $_POST['mensaje'];

    $destinatario = "adpajaramillo@gmail.com";
    $asunto = "Nota nueva - Las Nenas 81" . $nombre;
    $cuerpo = $mensaje;

    //Configuracion headers

    $headers = "From: noreply@lasnenas.com";

    //mail($destinatario,$asunto,$cuerpo,$headers);

    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Adriana y Patricia Jaramillo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <meta name="description" content="Celebramos la vida de Adriana y Patricia Jaramillo">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.webp">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src="https://kit.fontawesome.com/824efb27a7.js" crossorigin="anonymous"></script>
        <script src="js/app.js" defer></script>
    </head>
    <body>
        <a href="index.html" class="back-message"><div>Gracias</div></a>
    </body>

</html>
