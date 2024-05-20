<?php

    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', 587);
    ini_set('sendmail_from', 'tattosmart@gmail.com');

    $nombre=$_POST['nombre'];
    $mensaje= $_POST['mensaje'];
    $to = 'adpajaramillo@gmail.com';

    // Importa la librería PHPMailer
    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
      
      // Crea una instancia de PHPMailer
      $mail = new PHPMailer(true);
      
      try {
        // Configura el servidor SMTP de Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.mailersend.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'MS_7rHwlo@trial-v69oxl5o1kdg785k.mlsender.net';
        $mail->Password = 'Vs6UHCkXgD38Ifa3';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        // Configura el remitente y el destinatario
        $mail->setFrom('MS_7rHwlo@trial-v69oxl5o1kdg785k.mlsender.net', $nombre);
        $mail->addAddress('adpajaramillo@gmail.com', 'AdPajaramillo');
        
        // Configura el contenido del correo
        $mail->Subject = 'Nuevo mensaje desde el formulario';
        $mail->Body = "Nombre: $nombre\n\nMensaje: $mensaje";
        
        // Envía el correo
        $mail->send();
        
        echo '<script>
        alert ("Su nota se ha enviado correctamente")
    </script>';
      } catch (Exception $e) {
        echo 'Ha ocurrido un error al enviar el mensaje: ' . $mail->ErrorInfo;
      }
/*     } */ 
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
