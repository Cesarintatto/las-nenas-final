<?php

include 'appigoogle/vendor/autoload.php';

putenv ('GOOGLE_APPLICATION_CREDENTIALS=las-nenas-81-83da70d4e20d.json');


$client =  new Google_Client ();
$client->useApplicationDefaultCredentials ();
$client->SetScopes(['https://www.googleapis.com/auth/drive.file']);


try{

    $service = new Google_Service_Drive($client);
    $file_path = $_FILES['archivos']['tmp_name'];

    $file = new Google_Service_Drive_DriveFile ();
    $file->setName($_FILES['archivos']['name']);

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime_type = finfo_file($finfo, $file_path);
    

    $file->setParents(array("1wK970WpIQEKnprMEZ5-s0iUOXwVWUmT4"));
    $file->setDescription("Archivo cargado con PHP");
    $file->setMimeType($mime_type);

    $resultado = $service->files->create(
        $file,
        array(
            'data' => file_get_contents($file_path),
            'mimeType' => $mime_type,
            'uploadType' => 'media'
        )
    );

    echo '<script>
        alert ("Se ha cargado exitosamente")
    </script>';

}catch(Google_Service_Exception $gs){
    $mensaje = json_decode($gs->getMessage());
    echo $mensaje->error->message();

}catch(Exception $e){
    echo $e->getMessage();
}
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
        <a href="index.html#note-section" class="back-message"><div>Dejanos tu nota</div></a>
    </body>

</html>