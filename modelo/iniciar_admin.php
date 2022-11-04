<?php 

include("../conexion/conectar.php");

session_start();

$conet = new Conexion();
$con = $conet->conectando();   

if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}
/*
if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 2:
            header('location: ../vista/administrador.php');
        break;

        case 3:
            header('location: ../vista/usuario/usuario.php');
        break;

        default:
    }
}
*/
if(isset($_POST['iniciar'])){
    $correo = $_REQUEST['correo'];
    $contraseña = $_REQUEST['contraseña'];
   
    $correo=mysqli_real_escape_string($con, $_POST['correo']);
    $contraseña=mysqli_real_escape_string($con, $_POST['contraseña']);
    
    $consulta = "SELECT * FROM persona  WHERE correo='$correo' AND contrasena='$contraseña'";

    $resultado=mysqli_query($con, $consulta ) or die(mysqli_error());

    $fila = mysqli_fetch_assoc($resultado);

    $filas = mysqli_num_rows($resultado);
/*
    $row = $consulta->fetch(PDO::FETCH_NUM);
    if($row == true){
        //validar rol
        $rol = $row[8];
        $_SESSION['rol'] = $rol;

        switch($_SESSION['rol']){
            case 2:
                header('location: ../vista/administrador.php');
            break;
    
            case 3:
                header('location: ../vista/usuario/usuario.php');
            break;
    
            default:
        }

    }else{
        //No existe el usuario
        echo "El usuario o contraseña son incorrectos";
    }
*/
    if($filas==1){
        //echo "Usted ha iniciado sesion correctamente";
//falta poner los datos a administrador para que se muestren es el video 8, 9 y que lo redireccione ya sea a administrador o a cliente
        $_SESSION['id']=$fila['id'];
        $_SESSION['ide_persona']=$fila['ide_persona'];
        $_SESSION['nombre_completo']=$fila['nombre_completo'];
        $_SESSION['correo']=$fila['correo'];
        $_SESSION['celular']=$fila['celular'];
        $_SESSION['fcod_tipo_doc']=$fila['fcod_tipo_doc'];

        header("Location: ../vista/administrador.php");
        
    }else{
        echo "Usted ha cometido algun error <br> Verifique los datos de sesion";
    }

}
?>
