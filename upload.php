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

    echo '<a href=https://drive.google.com/open?id=' .$resultado->id . '" target="blank">'.$resultado->name.'</a>';

}catch(Google_Service_Exception $gs){
    $mensaje = json_decode($gs->getMessage());
    echo $mensaje->error->message();

}catch(Exception $e){
    echo $e->getMessage();
}