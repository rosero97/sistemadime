<?php

$charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#%$-";
$codigo = "";

for($i=0;$i<17;$i++){
    $codigo .= substr($charset, rand(0, 66),1);
}

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
    $mail->Password   = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $body = <<<HTML
        <p> Hola!
        <br>Estamos recibiendo una peticion para registrarse como administrador del siguiente correo: $email
        <br>Verifica que el correo sea el adecuado, si lo es, enviale el codigo de registro, si no lo es, ignora este correo.
        <br>
        <br>Este es el codigo de registro: <strong> $codigo </strong></p>

        HTML;

    //Recipients
    $mail->setFrom('digitalsmenu@gmail.com', 'Digitals Menu');
    $mail->addAddress('digitalsmenu@gmail.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject ='Peticion registro administrador';
//    $mail->Body ='Esta es otra manera para enviar el body <input type="button" value="Click aqui">';
    $mail->msgHTML($body);
    $mail->send();
    echo "<script> alert('La petición de registro fue enviada correctamente'); window.location.href='cod_registro.php';</script>";
    } catch (Exception $e) {
    echo "<script> alert('Error al enviar correo. Mailer Error: {$mail->ErrorInfo}');</script>";
}

?>
