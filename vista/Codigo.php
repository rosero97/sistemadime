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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <div class="form">
        <h2>Digital's Menu</h2>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Menu de Navegación</title>
        <link rel="stylesheet" href="../config/style1.css">

<body>
    </div>
    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
    </header>
    <div class="capa">
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <section>
                    <nav>
                        <a href="../index.html">Inicio</a>
                        <a href="login/1.Tipo_Registro.html">Registrarse</a>
                        <a href="Iniciar Sesion-2.php">Iniciar Sesion</a>
                        <a href="../inicio/Ayuda.html">Ayuda</a>
                    </nav>
                </section>

</body>
</div>
</div>
</header>
</head>

<body>
    <section>
        <link rel="stylesheet" href="../config/recuperar.css">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="contenedor">
                <div class="form">
                    <h2>Porfavor ingrese el codigo enviado a su Correo</h2>
                    <form action="Cambio de contraseña" method="Post">
                        <div class="inputBox">
                            <input type="email" value= ""/>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Enviar"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
