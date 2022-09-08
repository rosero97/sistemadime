<?php 

include("../conexion/conectar.php");

session_start();

$conet = new Conexion();
$con = $conet->conectando();   

if(isset($_POST['iniciar'])){
    $correo = $_REQUEST['correo'];
    $contraseña = $_REQUEST['contraseña'];
   
    $correo=mysqli_real_escape_string($con, $_POST['correo']);
    $contraseña=mysqli_real_escape_string($con, $_POST['contraseña']);
    
    $consulta = "SELECT * FROM persona WHERE correo='$correo' AND contrasena='$contraseña'";

    $resultado=mysqli_query($con, $consulta ) or die(mysqli_error());

    $fila = mysqli_fetch_assoc($resultado);

    $filas = mysqli_num_rows($resultado);

    if($filas==1){
        echo "Usted ha iniciado sesion correctamente";
/* falta poner los datos a administrador para que se muestren es el video 8 y que lo redireccione ya sea a administrador o a cliente
        $_SESSION['ide_persona']=$filas['ide_persona'];
        $_SESSION['nombre_completo']=$filas['nombre_completo'];
        $_SESSION['correo']=$filas['correo'];
        $_SESSION['celular']=$filas['celular'];
        $_SESSION['fcod_tipo_doc']=$filas['fcod_tipo_doc'];

        header('Location: ../vista/administrador.html');
        */
    }else{
        echo "Usted ha cometido algun error <br> Verifique los datos de sesion";
    }

}
?>