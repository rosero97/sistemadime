<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include("../conexion/conectar.php");


$correo=$_POST['correo'];

$obj = new conexion();
$c=$obj->conectando();
$query = "SELECT * FROM persona WHERE correo ='$correo'";
$ejecuta = mysqli_query($c, $query);


if(mysqli_fetch_array($ejecuta)){



        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';


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

/*            $body = <<<HTML
            <p> De: $correo </p> <a href="http://localhost/sistemadime-master/vista/Cambio%20de%20contrase%C3%B1a.php"><input type="button" value="Click aqui"></a>

            HTML;
*/
            //Recipients
            $mail->setFrom('digitalsmenu@gmail.com', 'Digitals Menu');
            $mail->addAddress($correo);


            //Content
            $mail->isHTML(true);
            $mail->Subject ='Recuperar Password';
            $mail->Body ='Para continuar con el proceso para recuperar tu contraseña da click en el siguiente boton <a href="http://localhost/sistemadime-master/vista/Cambio%20de%20contrase%C3%B1a.php"><input type="button" value="Click aqui"></a>';
//            $mail->msgHTML($body);
            $mail->send();
            echo "<script> alert('El correo se envio satisfactoriamente, Por favor verifique su correo.'); window.location.href='../vista/recuperar.php';</script>";
        } catch (Exception $e) {
            echo "<script> alert('Error al enviar correo. Mailer Error: {$mail->ErrorInfo}');</script>";
        }

}else{

    echo "<script> alert('El correo no se encontro en nuestro sistema'); window.location.href='../vista/recuperar.php';</script>";

}
