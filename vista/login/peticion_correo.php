<?php

include("../../conexion/conectar.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class codigo {
    
    function agregar(){
        
        $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#%$-";
        $codigo = "";

        date_default_timezone_set('America/Bogota');
        $fechaActual = date("Y-m-d H:i:s");
        
        for($i=0;$i<25;$i++){
            $codigo .= substr($charset, rand(0, 66),1);
        }    
        
        
        $obj = new conexion();
        $c=$obj->conectando();
        $insertar = "INSERT INTO peticion VALUE(
                                                ' ',
                                                '$codigo',
                                                '$fechaActual'
                                                   
        )";

        //echo $insertar;
        mysqli_query($c,$insertar);

        $cod_charset = "1234567890";
        $cod_name = "";

        for($i=0;$i<11;$i++){
            $cod_name .= substr($cod_charset, rand(0, 10),1);
        }    

        //Primero activar los eventos en phpmyadmin
        //SET GLOBAL event_scheduler= "ON"
        
        $evento = "CREATE EVENT `$cod_name`
                    ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 11 MINUTE 
                    ON COMPLETION NOT PRESERVE ENABLE 
                    DO DELETE FROM peticion 
                    WHERE fecha_codigo < NOW() - INTERVAL 10 MINUTE";

        //echo $evento;
        mysqli_query($c,$evento);
        
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
            $mail->Password   = 'zmcflkqzmjfdetjt';
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
            //$mail->Body ='Esta es otra manera para enviar el body <input type="button" value="Click aqui">';    
            $mail->msgHTML($body);
            $mail->send();
            echo "<script> alert('La petición de registro fue enviada correctamente'); window.location.href='../cod_registro.php';</script>";
            } catch (Exception $e) {
            echo "<script> alert('Error al enviar correo. Mailer Error: {$mail->ErrorInfo}');</script>";    
        }
            
    }    
}    

$obj = new codigo();


if(isset($_POST['enviar_peticion'])){
        $obj->agregar();
}
    


?>
