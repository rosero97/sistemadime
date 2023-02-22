<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email=$_POST['enviar_email'];


require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);


try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'digitalsmenu@gmail.com';
    $mail->Password   = 'yntepcjmdzfuwesp';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $body = <<<HTML
        <p> De: $email </p>

        HTML;

    //Recipients
    $mail->setFrom('digitalsmenu@gmail.com', 'Digitals Menu');
    $mail->addAddress('digitalsmenu@gmail.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject ='Peticion registro administrador';
//    $mail->Body ='Para continuar con el proceso para recuperar tu contraseña da click en el siguiente boton <a href="http://localhost/sistemadime-master/vista/Cambio%20de%20contrase%C3%B1a.php"><input type="button" value="Click aqui"></a>';
    $mail->msgHTML($body);
    $mail->send();
    echo "<script> alert('El correo se envio satisfactoriamente, Por favor verifique su correo.'); window.location.href='Final.html';</script>";
    } catch (Exception $e) {
    echo "<script> alert('Error al enviar correo. Mailer Error: {$mail->ErrorInfo}');</script>";
}

?>
