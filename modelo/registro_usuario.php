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
    $roleid = 3;

    $tipodoc=mysqli_real_escape_string($con, $_POST['tipodoc']);
    $correo=mysqli_real_escape_string($con, $_POST['correo']);
    $contraseña=mysqli_real_escape_string($con, $_POST['contraseña']);
        
    if($contraseña==$contraseña2){
        $consulta="INSERT INTO persona (ide_persona, nombre_completo, correo, celular, contrasena, fcod_tipo_doc) VALUES ('$numerodoc', '$nombres', '$correo', '$numerocel', '$contraseña', '$tipodoc')";

        $consulta2="INSERT INTO persona_has_role (persona_has_role, has_ide_persona, has_roleid) VALUES (DEFAULT, '$numerodoc', '$roleid')";

        $consulta3="INSERT INTO `cliente` (`t_cliente`, `ide_cliente`) VALUES (NULL, '$numerodoc')";

        $verificar_correo = mysqli_query($con, "SELECT * FROM persona WHERE correo='$correo'");

        if(mysqli_num_rows ($verificar_correo) >0 ){
            echo "<script 'text/javascript'>alert('El correo esta registrado, porfavor intente con otro.'); window.location.href='../vista/3.RegistrarseA.php';</script>";
            exit();
        }
        
        $resultado=mysqli_query($con, $consulta);
        $resultado2=mysqli_query($con, $consulta2);
        $resultado3=mysqli_query($con, $consulta3);
        if($resultado and $resultado2 and $resultado3){

            echo "<script 'text/javascript'>alert('El usuario ha sido registrado'); window.location.href='../vista/login/5.Confirmacion.html';</script>";

        }else{
            die("Ha habido un error, verifique nuevamente:".mysqli_error($con));
        }
    }
    else{
        
        echo "<script 'text/javascript'>alert('Verifique las contraseñas'); window.location.href='../vista/4.RegistrarseC.php';</script>";
    }
}
?>
