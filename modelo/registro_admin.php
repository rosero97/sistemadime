<?php

include("../conexion/conectar.php");

$conet = new Conexion();
$con = $conet->conectando();   

if(isset($_POST['Registrarse'])){
    $nombres = $_POST['nombres'];
    $tipodoc = $_POST['tipodoc'];
    $numerodoc = $_POST['numerodoc'];
    $correo = $_POST['correo'];
    $numerocel = $_POST['numerocel'];
    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];
    $roleid = 1;
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "";

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

    $atributos = json_decode($verify, TRUE);

    if(!$atributos['success']){
        echo "<script 'text/javascript'>alert('El captcha es obligatorio'); window.location.href='../vista/3.RegistrarseA.php';</script>";
    }
    
    $tipodoc=mysqli_real_escape_string($con, $_POST['tipodoc']);
    $correo=mysqli_real_escape_string($con, $_POST['correo']);
    $contraseña=mysqli_real_escape_string($con, $_POST['contraseña']);
        
    if($contraseña==$contraseña2){
        $contra_fuerte = password_hash ($contraseña, PASSWORD_DEFAULT);
        $consulta="INSERT INTO persona (id_persona, nombre_completo, correo, celular, contrasena, fcod_tipo_doc, rolid) VALUES ('$numerodoc', '$nombres', '$correo', '$numerocel', '$contra_fuerte', '$tipodoc', '$roleid')";

        $verificar_correo = mysqli_query($con, "SELECT * FROM persona WHERE correo='$correo'");

        if(mysqli_num_rows ($verificar_correo) >0 ){
            echo "<script 'text/javascript'>alert('El correo esta registrado, porfavor intente con otro.'); window.location.href='../vista/3.RegistrarseA.php';</script>";
            exit();
        }

        $resultado=mysqli_query($con, $consulta);
       
        if($resultado){

            echo "<script 'text/javascript'>alert('El usuario ha sido registrado'); window.location.href='../vista/login/5.Confirmacion.html';</script>";

        }else{
            die("Ha habido un error, verifique nuevamente:".mysqli_error($con));
        }
    }
    else{
        
        echo "<script 'text/javascript'>alert('Verifique las contraseñas'); window.location.href='../vista/3.RegistrarseA.php';</script>";
    }
}
?>
